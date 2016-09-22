<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->text('phone')->nullable();
            $table->text('extending')->nullable();
            $table->text('user_name_windows')->unique()->nullable();
            $table->text('home_page')->nullable();
            $table->integer('user_id')->unsigned();//entero sin signo
            $table->foreign('user_id')
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
        Schema::drop('user_profiles');
    }
}