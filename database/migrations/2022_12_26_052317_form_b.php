<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formb', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_owner');
            $table->string('father_of_owner');
            $table->string('plot_number');
            $table->string('address_of_building');
            $table->string('address_of_owner');
            $table->string('all_rooms_array');
            $table->string('internal_dimensions_array');
            $table->string('internal_entire_maraj');
            $table->string('area_of_land_on_building');
            $table->string('area_of_land_no_building');
            $table->string('building_absent');
            $table->string('construction_nature');
            $table->string('land_located');
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
