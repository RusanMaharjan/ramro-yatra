<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('invoice_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('pincode');
            $table->string('payment_mode')->default('Paypal');
            $table->string('payment_id');
            $table->string('bus_name');
            $table->string('selected_seat');
            $table->string('total_price');
            $table->unsignedBigInteger('seat_id');
            $table->foreign('seat_id')->references('seat_id')->on('seats')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
