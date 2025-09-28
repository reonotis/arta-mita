<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Contact extends Model
{
    use HasFactory;

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
        'email',
        'message'
    ];

}
