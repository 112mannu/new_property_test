<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texes', function (Blueprint $table) {
            $table->id();
            $table->string('survay_id');
            $table->string('staff_id');
            $table->string('house_tax');
            $table->string('water_bill');
            $table->string('other_bill');
            
            
            $table->timestamps();

            // $table->timestamp('created_at')->userCurrent();


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
