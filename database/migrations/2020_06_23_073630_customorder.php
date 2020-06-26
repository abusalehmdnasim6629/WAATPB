<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customorder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('category');
            $table->string('product_name');
            $table->string('brand');
            $table->string('quantity');
            $table->string('note');
            $table->string('city');
            $table->string('address');
            $table->string('d_status');
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
