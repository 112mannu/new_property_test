<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_dep extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'email',
        'statces',
        'password',
        'user_id',
        'profile'

    ];

}
