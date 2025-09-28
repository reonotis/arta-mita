<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function first()
    {
        return view('first');
    }

    public function contact()
    {
        return view('contact');
    }

    public function old()
    {
        return view('welcome_bk');
    }

    public function contactRegister(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // ここで実際の登録処理を行う
            // 例: データベースへの保存、メール送信など
            throw new \Exception('test');

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
