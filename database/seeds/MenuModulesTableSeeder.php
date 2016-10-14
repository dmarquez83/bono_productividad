<?php

use Illuminate\Database\Seeder;

class MenuModulesTableSeeder extends Seeder
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
          'description' =>  'Registro de Usuario',
          'status' =>  'A',
          'module_id' =>  1,
          'route_id' =>  1,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('menu_modules')->insert(array(
          'name'     => 'Listar',
          'description' =>  'Listado de Usuario',
          'status' =>  'A',
          'module_id' =>  1,
          'route_id' =>  2,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));

        \DB::table('menu_modules')->insert(array(
          'name'     => 'Registrar',
          'description' =>  'Registro de Grupos',
          'status' =>  'A',
          'module_id' =>  2,
          'route_id' =>  3,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('menu_modules')->insert(array(
          'name'     => 'Listar',
          'description' =>  'Listado de Grupos',
          'status' =>  'A',
          'module_id' =>  2,
          'route_id' =>  4,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('menu_modules')->insert(array(
          'name'     => 'Asignar Usuario',
          'description' =>  'Asignar Usuario a Grupos',
          'status' =>  'A',
          'module_id' =>  2,
          'route_id' =>  5,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));

        \DB::table('menu_modules')->insert(array(
          'name'     => 'Registrar',
          'description' =>  'Registro de Empresa',
          'status' =>  'A',
          'module_id' =>  3,
          'route_id' =>  6,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('menu_modules')->insert(array(
          'name'     => 'Listar',
          'description' =>  'Listar Empresas',
          'status' =>  'A',
          'module_id' =>  3,
          'route_id' =>  7,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
    }
}
