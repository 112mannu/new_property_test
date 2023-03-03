<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipal extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'owner_name',
        'owner_father_husband',
        'occupier_name',
        'presbyter_name',
        'polt_number',
        'coloney',
        'ward',
        'sqm',
        'square_feet',
        'total_covered_area',
        'carpet_area_basemen',
        'carpet_area_ground',
        'carpet_area_first',
        'carpet_area_second',
        'carpet_area_third',
        'carpet_area_Other',
        'sum_sq_ft',
        'plot_appearance_12_meters',
        'Plot_appearance_12_24_meters',
        'Plot_appearance_24_more_meters',
        'carpet_area_used_owner',
        'carpet_area_used_renter',
        'monthly_rental',
        'carpet_area_use_commercial',
        'construction_year',
        'monthly_rental_fixed_municipality',
    
    ];

}
