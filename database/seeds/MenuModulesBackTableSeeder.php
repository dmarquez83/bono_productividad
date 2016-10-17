<?php

use Illuminate\Database\Seeder;

class MenuModulesBackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menu_modules')->insert(array(
            'name'     => 'Registrar',
            'menu_item' =>  'Y',
            'type_access' =>  'Pantalla',
            'module_id' =>  1,
            'route_id' =>  1,
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('menu_modules')->insert(array(
            'name'     => 'Listar',
            'menu_item' =>  'Y',
            'type_access' =>  'Pantalla',
            'module_id' =>  1,
            'route_id' =>  2,
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('menu_modules')->insert(array(
            'name'     => 'Registrar',
            'menu_item' =>  'Y',
            'type_access' =>  'Pantalla',
            'module_id' =>  2,
            'route_id' =>  3,
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('menu_modules')->insert(array(
            'name'     => 'Listar',
            'menu_item' =>  'Y',
            'type_access' =>  'Pantalla',
            'module_id' =>  2,
            'route_id' =>  4,
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('menu_modules')->insert(array(
            'name'     => 'Asignar Usuario',
            'menu_item' =>  'Y',
            'type_access' =>  'Pantalla',
            'module_id' =>  2,
            'route_id' =>  5,
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('menu_modules')->insert(array(
            'name'     => 'Registrar',
            'menu_item' =>  'Y',
            'type_access' =>  'Pantalla',
            'module_id' =>  3,
            'route_id' =>  6,
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('menu_modules')->insert(array(
            'name'     => 'Listar',
            'menu_item' =>  'Y',
            'type_access' =>  'Pantalla',
            'module_id' =>  3,
            'route_id' =>  7,
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
    }
}
