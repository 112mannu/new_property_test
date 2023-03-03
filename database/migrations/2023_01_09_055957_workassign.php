<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Workassign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Workassign', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('upbtype_id');
            $table->string('city_id');
            $table->string('ward_no');
            $table->string('Remark');
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
