<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Surveyformb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Surveyformbs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('from_a_id');
            $table->string('caret_area_of_floor');
            $table->string('construction_year');
            $table->string('no_of_rooms');
            $table->string('rooms_area'); 
            $table->string('no_of_baramda'); 
            $table->string('baramda_area');
            $table->string('no_of_balcony');
            $table->string('balcony_area');
            $table->string('no_of_galiyaara');
            $table->string('galiyaara_area');
            $table->string('no_of_kitchen');
            $table->string('kitchen_area');  
            $table->string('no_of_bhandar_garh'); 
            $table->string('bhandar_garh_area');
            $table->string('no_of_other');
            $table->string('other_area');
            $table->string('Total_carpet_area_of_basement');
            $table->string('derail_of_tatal_carpet_area_of_house');
            $table->string('yearly_assessment_value_and_tax_on_property');
            $table->string('Total_area_of_property');  
            $table->string('Total_covered_area_house'); 
            $table->string('total_carpet_area_of_house'); 
            $table->string('monthly_rate');
            $table->string('yearly_assessment_value_of_property');
            $table->string('house_tax');
            $table->string('water_tax');
            $table->string('other_tax');
            $table->string('total_tax');  
            $table->string('image'); 
            $table->string('remark'); 
            $table->timestamp('created_at')->userCurrent();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
