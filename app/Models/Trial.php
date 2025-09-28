<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Trial extends Model
{
    use HasFactory;

    protected $table = 'trial';

    protected $casts = [
        'date_time' => 'datetime',
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
        'email',
        'customer_id',
        'date_time',
        'course_id',
    ];

}
