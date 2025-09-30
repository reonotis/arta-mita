<?php

namespace App\Service;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class ContactService
{
    function __construct()
    {
    }

    /**
     * 1週間以内にあった問い合わせを取得する
     */
    public function getOneWeekContact(): Collection
    {
        return Contact::join('customers', 'customers.id', '=', 'contact.customer_id')
            ->whereNull('customers.deleted_at')
            ->where('contact.created_at', '>', Carbon::now()->subWeek())
            ->orderBy('contact.created_at', 'asc')
            ->get();
    }

    /**
     * 一週間以内にあった問い合わせの件数を取得する
     * @return int
     */
    public function getOneWeekContactCount(): int
    {
        return Contact::where('created_at', '>', Carbon::now()->subWeek())
            ->count();
    }



}
