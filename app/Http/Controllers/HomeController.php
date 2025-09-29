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
    /**
     * トップページを表示する
     * @return View
     */
    public function index(): View
    {
        return view('welcome');
    }

    /**
     * 「初めての方へ」ページを表示する
     * @return View
     */
    public function first(): View
    {
        return view('first');
    }

    /**
     * 「会員プラン」ページを表示する
     * @return View
     */
    public function plan(): View
    {
        return view('plan');
    }

    /**
     * 「クラスについて」ページを表示する
     * @return View
     */
    public function class(): View
    {
        return view('class');
    }

    /**
     * 「インストラクター一覧」ページを表示する
     * @return View
     */
    public function instructor(): View
    {
        return view('instructor');
    }

}
