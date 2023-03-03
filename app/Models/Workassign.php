<?php

namespace App\Models;
use App\Models\Ulbward;
use App\Models\Ulbbodies;
use App\Models\Ulbtype;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workassign extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'upbtype_id',
        'city_id',
        'ward_no',
        'Remark',
    
    ];
    public function user()
    {
          return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function ulbtype()
    {
          return $this->belongsTo(Ulbtype::class, 'upbtype_id', 'id');
    }

    public function ulbboder()
    {
          return $this->belongsTo(Ulbbodies::class, 'city_id', 'id');
    }

 
    public function ulbwards()
    {
         return $this->belongsTo(Ulbward::class, 'ward_no', 'id');
      
    }

}
