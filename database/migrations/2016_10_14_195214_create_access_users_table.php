<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('access_modules_id')->unsigned();//entero sin signo
            $table->foreign('access_modules_id')
              ->references('id')
              ->on('access_modules')
              ->onDelete('cascade');
            $table->integer('users_id')->unsigned();//entero sin signo
            $table->foreign('users_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
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
        Schema::drop('access_users');
    }
}
