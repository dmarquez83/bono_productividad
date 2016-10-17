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
            $table->enum('type_user', ['Usuario','Grupo']);
            $table->integer('id_type_user')->unsigned();//entero sin signo
            $table->integer('company_id')->unsigned()->nullable();//entero sin signo
            $table->foreign('company_id')
              ->references('id')
              ->on('companies');
            $table->boolean('companies_all')->nullable();
            $table->integer('menu_modules_id')->unsigned();//entero sin signo
            $table->foreign('menu_modules_id')
              ->references('id')
              ->on('menu_modules')
              ->onDelete('cascade');
            $table->boolean('acc_consult')->nullable();
            $table->boolean('acc_update')->nullable();
            $table->boolean('acc_insert')->nullable();
            $table->boolean('acc_remove')->nullable();
            $table->boolean('acc_special')->nullable();
            $table->boolean('acc_authorize')->nullable();
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
