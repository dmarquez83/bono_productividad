<?php

use Illuminate\Database\Seeder;

class ModulesBackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('modules')->insert(array(
            'name'     => 'Usuarios',
            'description' =>  'Usuarios del Sistema',
            'category_id' =>  2,
            'icon' =>  'user',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('modules')->insert(array(
            'name'     => 'Grupos',
            'description' =>  'Grupos del Sistema',
            'category_id' =>  2,
            'icon' =>  'users',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('modules')->insert(array(
            'name'     => 'Empresa',
            'description' =>  'Empresa del Sistema',
            'category_id' =>  2,
            'icon' =>  'briefcase',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('modules')->insert(array(
            'name'     => 'Modulos',
            'description' =>  'Modulos del Sistema',
            'category_id' =>  2,
            'icon' =>  'layers',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('modules')->insert(array(
            'name'     => 'Mantenimiento de Pantallas',
            'description' =>  'Mantenimiento de Pantallas',
            'category_id' =>  2,
            'icon' =>  'settings',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('modules')->insert(array(
            'name'     => 'Acceso',
            'description' =>  'Acceso',
            'category_id' =>  2,
            'icon' =>  'key',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

       /* \DB::table('modules')->insert(array(
            'name'     => 'Dashboard',
            'description' =>  'Dashboard del Sistema',
            'category_id' =>  1,
            'icon' =>  'user',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));*/
    }

}
