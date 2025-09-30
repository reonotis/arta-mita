<?php

namespace App\Http\Controllers;

use App\Mail\TrialNotificationMail;
use App\Mail\TrialThankYouMail;
use App\Models\Customer;
use App\Models\Trial;
use App\Consts\CommonConsts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * 体験申込のコントローラークラス
 */
class TrialController extends Controller
{
    /**
     * 体験申込画面を表示
     *
     * @return void
     */
    public function index()
    {
        return view('trial');
    }

    /**
     * 体験申込を受け付ける
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'preferred_date' => 'required|date',
            'preferred_time' => 'required|string',
            'course_id' => 'required|integer|in:' . implode(',', array_keys(CommonConsts::TRIAL_COURSE_LIST)),
        ]);

        try {
            // メールアドレスから顧客を取得
            $customer = Customer::where('email', $request->email)->first();

            // 顧客がいなければ登録
            if (is_null($customer)) {
                $customer = Customer::create([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }

            // 体験申込の登録
            $trial = Trial::create([
                'customer_id' => $customer->id,
                'name' => $request->name,
                'date_time' => $request->preferred_date . ' ' . $request->preferred_time,
                'course_id' => $request->course_id,
            ]);

             // 管理者への問い合わせ通知メール送信
             Mail::to(env('MAIL_FROM_ADDRESS'))
                 ->bcc('fujisawareon@yahoo.co.jp')
                 ->send(new TrialNotificationMail($customer, $trial));

             // 問い合わせ完了メール送信
             Mail::to($trial->email)
                 ->bcc('fujisawareon@yahoo.co.jp')
                 ->send(new TrialThankYouMail($trial));

            // 成功レスポンス
            return response()->json([
                'success' => true,
                'message' => '体験申込を受け付けました。ありがとうございます。'
            ], 200);
        } catch (\Exception $e) {
            // エラーログに記録
            \Log::error('Trial form submission error: ' . $e->getMessage());

            // 失敗レスポンス
            return response()->json([
                'success' => false,
                'message' => '申し訳ございません。送信に失敗しました。しばらく時間をおいて再度お試しください。'
            ], 500);
        }
    }
}
