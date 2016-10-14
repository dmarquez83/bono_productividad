<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('status', ['A','E']);
            $table->integer('menu_modules_id')->unsigned();//entero sin signo
            $table->foreign('menu_modules_id')
              ->references('id')
              ->on('menu_modules')
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
        Schema::drop('access_modules');
    }
}
