<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Survey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('date');
            $table->string('property_owner_name');
            $table->string('father_husband_name');
            $table->string('mobile_number');
            $table->string('aadhar_card_no'); 
            $table->string('property_no'); 
            $table->string('mohhalla');
            $table->string('ward_no');
            $table->string('category');
            $table->string('sub_category');
            $table->string('ownership');
            $table->string('joint_name');
            $table->string('use_of_property');  
            $table->string('use_mix'); 
            $table->string('carpet_area');
            $table->string('rental_than_no_of_families');
            $table->string('water_source');
            $table->string('toilet_type');
            $table->string('septic_tank_last');
            $table->string('connected_to_sewage_line');
            $table->string('type_of_property');  
            $table->string('property_situated'); 
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
