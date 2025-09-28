<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProfileUpdateRequest;
use App\Mail\ContactNotificationMail;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
            // 登録処理
            $contact = Contact::create($request->all());

            // 管理者への問い合わせ通知メール送信
            Mail::to(env('MAIL_FROM_ADDRESS'))
                ->bcc('fujisawareon@yahoo.co.jp')
                ->send(new ContactNotificationMail($contact));

            // 問い合わせ完了メール送信
            // Mail::to($contact->email)
            //     ->bcc('fujisawa@reonotis.jp')
            //     ->send(new ThankYouMail($contact));


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
