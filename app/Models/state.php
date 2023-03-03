<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'sates_code',
        'status',
        'created_at',

    ];

    public function district()
    {
        return $this->hasMany(District::class, 'state_id', 'id');
    }

    public function town()
    {
        return $this->hasMany(Town::class, 'state_id', 'id');
    }



}


