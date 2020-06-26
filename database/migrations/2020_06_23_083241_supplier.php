<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Supplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('coo');
            $table->string('item');
            $table->string('size');
            $table->string('retail_price');
            $table->string('selling_price');
            $table->string('remark');
            $table->string('date');
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
