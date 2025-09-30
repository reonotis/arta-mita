<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
class Information extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_HIDE = 0;
    const STATUS_DISPLAY= 1;
    const STATUS_LIST = [
        self::STATUS_HIDE => '非表示',
        self::STATUS_DISPLAY => '表示',
    ];

    protected $table = 'information';

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
