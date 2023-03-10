<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'transaction_id',
        'staff_id',
        'survey_form_id',
        'tex_type',
        'amount',
        'created_at',
    ];

}
