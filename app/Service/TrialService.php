<?php

namespace App\Service;

use App\Consts\CommonApplyConst;
use App\Models\Trial;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

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
        return Trial::where('date_time', CommonApplyConst::APPLY_TYPE_TRIAL)
            ->where('apply_date', '>=', Carbon::now()->subWeek())
            ->where('apply_date', '<=', Carbon::now())
            ->get();
    }

}
