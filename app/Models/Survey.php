<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Survey extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'date',
        'property_owner_name',
        'father_husband_name',
        'mobile_number',
        'aadhar_card_no',
        'property_no',
        'mohhalla',
        'ward_no',
        'category',
        'sub_category',
        'ownership',
        'joint_name',
        'use_of_property',
        'use_mix',
       // 'carpet_area',
        'rental_than_no_of_families',
        'water_source',
        'toilet_type',
        'septic_tank_last',
        'connected_to_sewage_line',
        'type_of_property',
        'property_situated',
        'remark',
        'created_at',

        'state_id',
        'district_id',
        'ulb_id',
        'floor_no',
        'caret_area_of_floor',
        'construction_year',
        'no_of_rooms',
        'rooms_area',
        'baramda_area',
        'balcony_area',
        'galiyaara_area',
        'kitchen_area',
        'bhandar_garh_area',
        'other_area',
        'Total_area_of_property',
        'Total_covered_area_house',
        'total_carpet_area_of_house',
        'monthly_rate',
        'yearly_assessment_value_of_property',
        'house_tax',
        'water_tax',
        'other_tax',
        'total_tax',
        
        'room_carpetarea',
        'baramda_carpet',
        'barcoly_carpet',
        'galyara_carpet',
        'kitchan_carpet',
        'bhandar_carpet',
        'other_carpet',
        'total_basment_carpet',
        'yearly_assesment',

        'image',
        'unique_id',
    ];


    public function  username()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
