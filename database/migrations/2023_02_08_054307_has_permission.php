<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HasPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('has_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('role_id');
            $table->string('permissions_id');
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
        //
    }
}
