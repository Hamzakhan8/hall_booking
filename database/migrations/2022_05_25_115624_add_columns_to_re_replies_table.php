<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToReRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('re_replies', function (Blueprint $table) {
            $table->foreignId('hall_id')
            ->references('id')
            ->on('halls')
            ->after('comment_id')
            ->cascadeOnDelete();

            $table->string('hall_name')
            ->after('hall_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('re_replies', function (Blueprint $table) {
            $table->dropColumn('hall_id');
            $table->dropColumn('hall_name');
        });
    }
}
