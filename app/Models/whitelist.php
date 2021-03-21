<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\whitelist
 *
 */
class whitelist extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'IMEI',
        'IMSI',
        'MSISDN',
        'created_at',
        'updated_at',
        'user_id',
    ];
}
