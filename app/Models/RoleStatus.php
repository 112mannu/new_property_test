<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleStatus extends Model
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
