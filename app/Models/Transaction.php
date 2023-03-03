<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'transaction_id',
        'staff_id',
        'user_id',
        'type',
        'debit',
        'created_at',

    ];

}
