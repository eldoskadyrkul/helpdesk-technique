<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->unsignedInteger('ticket_id')->nullable();
            $table->foreign('ticket_id', 'ticket_fk_583774')->references('id')->on('tickets');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_583777')->references('id')->on('users');
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
