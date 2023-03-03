<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'state_id',
        'name',
        'district_code',
        'status',
        'created_at',

    ];

    public function state()
    {
        return $this->belongsTo(state::class, 'state_id', 'id');
    }

    public function town()
    {
        return $this->hasMany(Town::class, 'district_id', 'id');
    }

}
