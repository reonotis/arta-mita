<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property int $customer_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Contact extends Model
{
    use HasFactory;

    const CONTACT_TYPE_JOIN = 1;
    const CONTACT_TYPE_PRIVATE_LESSON = 2;
    const CONTACT_TYPE_VISITOR = 3;
    const CONTACT_TYPE_OTHER = 4;
    const CONTACT_TYPE_LIST = [
        self::CONTACT_TYPE_JOIN => '入会・退会・休会',
        self::CONTACT_TYPE_PRIVATE_LESSON => 'プライベートレッスン申し込み',
        self::CONTACT_TYPE_VISITOR => 'ビジター',
        self::CONTACT_TYPE_OTHER => 'その他',
    ];

    protected $table = 'contact';

    protected $casts = [
        'created_at' => 'datetime',
    ];

    protected $guarded = ['id']; // ID は保存不可

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'message',
        'customer_id',
        'contact_type',
    ];

}
