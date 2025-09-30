<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\ContactService;
use App\Service\InformationService;
use Illuminate\View\View;

class InformationController extends Controller
{
    private InformationService $information_service;

    public function __construct()
    {
        $this->information_service = app(InformationService::class);
    }

    /**
     * @return View
     */
    public function information(): View
    {
        $information_list = $this->information_service->getInformation();

        return view('admin.information_list', [
            'information_list' => $information_list,
        ]);
    }
}
