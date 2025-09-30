<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Trial extends Model
{
	use HasFactory, SoftDeletes;
    const STATUS_APPLIED = 0;
    const STATUS_ARRIVED = 1;
    const STATUS_CANCELLED_NO_CONTACT = 90;
    const STATUS_CANCELLED_CONTACT = 91;
    const STATUS_CANCELLED_SCHEDULE = 92;

    public const STATUS_LIST = [
        self::STATUS_APPLIED => '申し込み',
        self::STATUS_ARRIVED => '来場済み',
        self::STATUS_CANCELLED_NO_CONTACT => 'キャンセル（無断）',
        self::STATUS_CANCELLED_CONTACT => 'キャンセル（連絡あり）',
        self::STATUS_CANCELLED_SCHEDULE => '日程調整',
    ];

    protected $table = 'trial';

    protected $casts = [
        'date_time' => 'datetime',
        'created_at' => 'datetime',
		'deleted_at' => 'datetime',
    ];

    protected $guarded = ['id']; // ID は保存不可

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'customer_id',
        'date_time',
        'course_id',
    ];

}
