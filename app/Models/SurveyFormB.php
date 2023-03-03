<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyFormB extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'from_a_id',
        'state_id',
        'district_id',
        'ulb_id',
        'floor_no',
        'caret_area_of_floor',
        'construction_year',
        'no_of_rooms',
        'rooms_area',
        'no_of_baramda',
        'baramda_area',
        'no_of_balcony',
        'balcony_area',
        'no_of_galiyaara',
        'galiyaara_area',
        'no_of_kitchen',
        'kitchen_area',
        'no_of_bhandar_garh',
        'bhandar_garh_area',
        'no_of_other',
        'other_area',
        'Total_carpet_area_of_basement',
        'derail_of_tatal_carpet_area_of_house',
        'yearly_assessment_value_and_tax_on_property',
        'Total_area_of_property',
        'Total_covered_area_house',
        'total_carpet_area_of_house',
        'monthly_rate',
        'yearly_assessment_value_of_property',
        'house_tax',
        'water_tax',
        'other_tax',
        'total_tax',
        'image',
        'remark',
        'unique_id',
        'created_at',
    ];


    protected $table ="surveyformbs";
}


