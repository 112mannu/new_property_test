<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ulbodies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ulbodies', function (Blueprint $table) {
            $table->id();
            $table->string('upbtype_id');
            $table->string('city');
            $table->string('code');
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
