<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('menu_item', ['Y','N']);
            $table->enum('type_access', ['Pantalla','Reporte']);
            $table->integer('module_id')->unsigned();//entero sin signo
            $table->foreign('module_id')
              ->references('id')
              ->on('modules')
              ->onDelete('cascade');
            $table->integer('route_id')->unsigned();//entero sin signo
            $table->foreign('route_id')
              ->references('id')
              ->on('routes')
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
        Schema::drop('menu_modules');
    }
}
