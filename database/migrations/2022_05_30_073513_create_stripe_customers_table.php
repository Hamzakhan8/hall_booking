<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStripeCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stripe_customers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();

            $table->uuid('customer_id')->uniqid();
            $table->string('address', 255);
            $table->string('email');
            $table->string('phone');

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
        Schema::dropIfExists('stripe_customers');
    }
}
