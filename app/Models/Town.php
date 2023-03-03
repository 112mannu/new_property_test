<?php

namespace App\Models;

use App\Models\state;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Town extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'state_id',
        'district_id',
        'name',
        'ulb_code',
        'status',
        'created_at',

    ];

    public function district()
    {
          return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function state()
    {
          return $this->belongsTo(State::class, 'state_id', 'id');
    }


}
