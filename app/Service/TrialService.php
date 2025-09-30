<?php

namespace App\Service;

use App\Models\Trial;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class TrialService
{
    protected int $applyType;
    protected string $durationMessage = '';

    function __construct()
    {
    }

    /**
     * 1週間以内に体験を行う予定の顧客を取得する
     */
    public function getOneWeekTrial(): Collection
    {
        return Trial::join('customers', 'customers.id', '=', 'trial.customer_id')
            ->whereNull('customers.deleted_at')
            ->whereBetween('date_time', [
                Carbon::today(),
                Carbon::now()->addWeek(),
            ])
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
