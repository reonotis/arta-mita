<?php

namespace App\Service;

use App\Models\Trial;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class TrialService
{

    function __construct()
    {
    }

    /**
     */
    public function getAllTrial(): Collection
    {
        return Trial::join('customers', 'customers.id', '=', 'trial.customer_id')
            ->whereNull('customers.deleted_at')
            ->orderBy('date_time', 'asc')
            ->get();
    }

    public function getOneWeekTrialCount(): int
    {
        return Trial::whereBetween('date_time', [
                Carbon::today(),
                Carbon::now()->addWeek(),
            ])
            ->count();
    }

}
