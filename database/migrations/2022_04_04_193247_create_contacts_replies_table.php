<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')
            ->on('users')->cascadeOnDelete();
            $table->foreignId('contacts_id')->references('id')
            ->on('contacts');
            $table->string('reply');
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
        Schema::dropIfExists('contacts_replies');
    }
}
