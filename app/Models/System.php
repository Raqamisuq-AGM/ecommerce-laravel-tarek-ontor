<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'addr',
        'working_hour',
        'whatsapp',
        'facebook',
        'twitter',
        'instagram',
        'pinterest',
        'dribble',
        'linkedin',
        'tiktok',
        'youtube',
        'about_us',
        'terms_condition',
        'refund_policy',
    ];
}