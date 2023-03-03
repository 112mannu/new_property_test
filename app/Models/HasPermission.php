<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'permissions_id',
        'view',
        'add',
        'edit',
        'delete',
        'created_at' 
    ];

    protected $table ="has_permissions";
}
