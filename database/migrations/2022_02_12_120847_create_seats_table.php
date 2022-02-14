<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id('seat_id');
            $table->string('bus_name');
            $table->string('route');
            $table->string('operator');
            $table->string('selected_seat');
            $table->string('price');
            $table->string('total_price');
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('bus_id')->references('bus_id')->on('buses')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('seats');
    }
}
