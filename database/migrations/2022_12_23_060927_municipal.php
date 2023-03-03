<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Municipal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipal', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('owner_father_husband');
            $table->string('presbyter_name');
            $table->string('polt_number');
            $table->string('coloney');
            $table->string('ward');
            $table->string('sqm');
            $table->string('square_feet');
            $table->string('total_covered_area');
            $table->string('carpet_area_basemen');
            $table->string('carpet_area_ground');
            $table->string('carpet_area_first');
            $table->string('carpet_area_second');
            $table->string('carpet_area_third');
            $table->string('carpet_area_Other');
            $table->string('sum_sq_ft');
            $table->string('plot_appearance_12_meters');
            $table->string('Plot_appearance_12_24_meters');
            $table->string('Plot_appearance_24_more_meters');
            $table->string('carpet_area_used_owner');
            $table->string('carpet_area_used_renter');
            $table->string('monthly_rental');
            $table->string('carpet_area_use_commercial');
            $table->string('construction_year');
            $table->string('monthly_rental_fixed_municipality');
            $table->timestamps();
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
