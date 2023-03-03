<?php

namespace App\Models;

use App\Models\Ulbtype;
use App\Models\Ulbward;
use App\Models\Workassign;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ulbbodies extends Model
{
    use HasFactory;
    protected $fillable = [
        'upbtype_id',
        'city',
        'code',
        'remark'
    ];

    public function ulbtype()
    {
        return $this->belongsTo(Ulbtype::class, 'upbtype_id', 'id');
    }

    public function ulbward()
    {
        return $this->hasMany(Ulbward::class, 'city_id', 'id');
    }


    public function workbod()
    {
        return $this->hasMany(Workassign::class, 'city_id', 'id');
    }

    public function uplwork()
    {
        return $this->belongsTo(Workassign::class, 'ward_no', 'id');
    }

}