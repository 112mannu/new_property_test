<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class District extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districtes', function (Blueprint $table) {
            $table->id();
            $table->string('state_id');
            $table->string('name');
            $table->string('district_code', 25);    
            $table->tinyInteger('status')->default(1);
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
