<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotificationMail;
use App\Mail\ContactThankYouMail;
use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * コンタクトフォームのコントローラークラス
 */
class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function register(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
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

            // 登録処理
            $contact = Contact::create( [
                'customer_id' => $customer->id,
                'name' => $request->name,
                'message' => $request->message,
                'contact_type' => $request->contact_type,
            ]);

            // // 管理者への問い合わせ通知メール送信
            // Mail::to(env('MAIL_FROM_ADDRESS'))
            //     ->bcc('fujisawareon@yahoo.co.jp')
            //     ->send(new ContactNotificationMail($contact));

            // // 問い合わせ完了メール送信
            // Mail::to($contact->email)
            //     ->bcc('fujisawareon@yahoo.co.jp')
            //     ->send(new ContactThankYouMail($contact));


            // 成功レスポンス
            return response()->json([
                'success' => true,
                'message' => 'お問い合わせを受け付けました。ありがとうございます。'
            ], 200);
        } catch (\Exception $e) {
            // エラーログに記録
            \Log::error('Contact form submission error: ' . $e->getMessage());

            // 失敗レスポンス
            return response()->json([
                'success' => false,
                'message' => '申し訳ございません。送信に失敗しました。しばらく時間をおいて再度お試しください。'
            ], 500);
        }
    }
}
