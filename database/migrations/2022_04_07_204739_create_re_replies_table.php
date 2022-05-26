<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('re_replies', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();

            $table->string('username');

            $table->string('username_to');

            $table->foreignId('comment_id')
            ->references('id')
            ->on('comments');

            $table->foreignId('reply_id')
            ->references('id')
            ->on('replies');

            $table->foreignId('hall_id')
            ->references('id')
            ->on('halls')
            ->cascadeOnDelete();

            $table->string('hall_name');

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
        Schema::dropIfExists('re_replies');
    }
}
