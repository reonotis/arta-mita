<?php

namespace App\Service;

use App\Models\Information;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class InformationService
{
    function __construct()
    {
    }

    public function getInformation()
    {
        return Information::orderBy('created_at', 'desc')
            ->get();
    }

}
