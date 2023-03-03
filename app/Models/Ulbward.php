<?php

namespace App\Models;

use App\Models\Ulbtype;
use App\Models\Workassign;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ulbward extends Model
{
    use HasFactory;
    protected $fillable = [
        'upbtype_id',
        'city_id',
        'ward_no',
        'remark'
    ];

    public function ulbtype()
    {
          return $this->belongsTo(Ulbtype::class, 'upbtype_id', 'id');
    }

    public function ulbboder()
    {
          return $this->belongsTo(Ulbbodies::class, 'city_id', 'id');
    }

    public function warkwars()
    {
        return $this->hasMany(Workassign::class, 'ward_no', 'id');
    }
    
}
