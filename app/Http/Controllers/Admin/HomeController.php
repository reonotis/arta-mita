<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\ContactService;
use App\Service\TrialService;
use Illuminate\View\View;

class HomeController extends Controller
{
    private TrialService $trial_service;
    private ContactService $contact_service;

    public function __construct()
    {
        $this->contact_service = app(ContactService::class);
        $this->trial_service = app(TrialService::class);
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $contact_count = $this->contact_service->getOneWeekContactCount();
        $trial_count = $this->trial_service->getOneWeekTrialCount();

        return view('admin.home', [
            'trial_count' => $trial_count,
            'contact_count' => $contact_count,
        ]);
    }

    /**
     * @return View
     */
    public function trial(): View
    {
        $trial = $this->trial_service->getAllTrial();

        return view('admin.trial', [
            'trial' => $trial,
        ]);
    }

    /**
     * @return View
     */
    public function contact(): View
    {
        $contacts = $this->contact_service->getOneWeekContact();

        return view('admin.contact', [
            'contacts' => $contacts,
        ]);
    }


}
