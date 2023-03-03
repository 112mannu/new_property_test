<?php

namespace App\Models;

use App\Models\Ulbward;
use App\Models\Ulbbodies;
use App\Models\Workassign;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ulbtype extends Model

{
    use HasFactory;
    protected $fillable = [
        'ulbtype',
        'remark'
    ];

    public function ulbbodies()
    {
        return $this->hasMany(Ulbbodies::class, 'upbtype_id', 'id');
    }

    public function ulbward()
    {
        return $this->hasMany(Ulbward::class, 'upbtype_id', 'id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'upbtype_id', 'id');
    }
    

    public function worktyp()
    {
        return $this->hasMany(Workassign::class, 'upbtype_id', 'id');
    }
}
