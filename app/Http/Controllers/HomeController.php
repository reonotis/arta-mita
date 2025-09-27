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

    public function old()
    {
        return view('welcome_bk');
    }
}
