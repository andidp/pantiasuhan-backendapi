<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOprhansTable extends Migration
{
    /**
     * Create orphans table
     * name: the name of orphan
     * dob: date of birth of orphan
     * father_name: [optional]
     * mother_name: [optional]
     * parent_address: [optional]
     * address:[optional]
     * phone: [optional]
     * email: [optional]
     * status: active|adopted|inactive
     *
     * @return void
     *
     */
    public function up()
    {
        Schema::create('oprhans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nickname');
            $table->date('dob');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('parent_address')->nullable();
            $table->string('religion')->nullable();
            $table->string('email')->nullable();
            $table->smallInteger('status');
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
        Schema::dropIfExists('oprhans');
    }
}
