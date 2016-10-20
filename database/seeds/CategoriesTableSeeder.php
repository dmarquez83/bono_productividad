<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert(array(
            'name'     => 'Dashboard',
            'description' =>  'Dashboard del Sistema',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('categories')->insert(array(
            'name'     => 'Configuración',
            'description' =>  'Configuración del Sistema',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('categories')->insert(array(
            'name'     => 'Operativos',
            'description' =>  'Modulos Operativos del Sistema',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

    }
}
