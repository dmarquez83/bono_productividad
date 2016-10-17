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
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('modules')->insert(array(
            'name'     => 'Grupos',
            'description' =>  'Grupos del Sistema',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('modules')->insert(array(
            'name'     => 'Empresa',
            'description' =>  'Empresa del Sistema',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));


    }
}
