<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
 
   use HasFactory;

public $timestamps = false;
    protected $fillable = [
        'admin_id',
        'user_id',
        'balance',
        'status',
        'admin_status',
        'remark',
        'credit',
        'debit',	
        'created_at',
    ];


    public function user()

    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }



}
