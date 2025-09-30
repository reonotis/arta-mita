<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\TrialService;
use Illuminate\View\View;

class HomeController extends Controller
{
    private TrialService $trial_service;

    public function __construct()
    {
        $this->trial_service = app(TrialService::class);
    }

    /**
     * @return View
     */
    public function index(): View
    {

        $trial = $this->trial_service->getOneWeekTrial();

        return view('admin.home', [
            'trial' => $trial,
        ]);
    }


    /**
     * @return View
     */
    public function trial(): View
    {
        return view('admin.home');
    }


}
