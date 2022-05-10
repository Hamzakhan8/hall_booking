<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();

            $table->string('username');

            $table->foreignId('halls_id')
            ->references('id')
            ->on('halls')
            ->cascadeOnDelete();

            $table->string('hall_name');
            $table->string('booking_date');
            $table->string('checkin_date');
            $table->string('checkout_date');

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
        Schema::dropIfExists('bookings');
    }
}
