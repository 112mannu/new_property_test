<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premission extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'view',
        'add',
        'edit',
        'delete',
        'created_at',
    ];
    
    
}
