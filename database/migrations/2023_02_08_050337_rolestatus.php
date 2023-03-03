<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rolestatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olestatus', function (Blueprint $table) {
            $table->id();
            $table->string('Role');
            $table->string('view');
            $table->string('add');
            $table->string('edit');
            $table->string('delete');          
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
      
    }
}
