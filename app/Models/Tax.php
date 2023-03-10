<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survey;
use App\Models\user;

class Tax extends Model
{
    use HasFactory;

  
    protected $fillable = [
        'survay_id',
        'staff_id',
        'house_tax',
        'water_tax',
        'other_tax',
        'total_tax',
        'pay',

    ];

    public function survey()
    {
        return $this->hasMany(Survey::class, 'survay_id', 'id');
    }


    public function surveyes()
    {
        return $this->hasMany(User::class, 'survay_id', 'id');
    }




    

    protected $table ="texes";

}



