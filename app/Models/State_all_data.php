<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State_all_data extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'state',
        'state_code',
        'district_code',
        'district_name',
        'town_code',
        'town_name' 
    ];

    protected $table ="state_all_datas";
}
