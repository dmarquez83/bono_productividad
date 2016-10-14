<?php

use Illuminate\Database\Seeder;

class AccessModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*usuario*/
        \DB::table('access_modules')->insert(array(
          'name'     => 'store',
          'status' =>  'A',
          'menu_modules_id' =>  1,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'show',
          'status' =>  'A',
          'menu_modules_id' =>  2,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'edit',
          'status' =>  'A',
          'menu_modules_id' =>  2,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'destroy',
          'status' =>  'A',
          'menu_modules_id' =>  2,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        /*grupo*/
        \DB::table('access_modules')->insert(array(
          'name'     => 'store',
          'status' =>  'A',
          'menu_modules_id' =>  3,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'show',
          'status' =>  'A',
          'menu_modules_id' =>  4,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'edit',
          'status' =>  'A',
          'menu_modules_id' =>  4,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'destroy',
          'status' =>  'A',
          'menu_modules_id' =>  4,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'show',
          'status' =>  'A',
          'menu_modules_id' =>  5,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'store',
          'status' =>  'A',
          'menu_modules_id' =>  5,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'destroy',
          'status' =>  'A',
          'menu_modules_id' =>  5,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        /*Empresa*/
        \DB::table('access_modules')->insert(array(
          'name'     => 'store',
          'status' =>  'A',
          'menu_modules_id' =>  6,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'show',
          'status' =>  'A',
          'menu_modules_id' =>  7,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'edit',
          'status' =>  'A',
          'menu_modules_id' =>  7,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
        \DB::table('access_modules')->insert(array(
          'name'     => 'destroy',
          'status' =>  'A',
          'menu_modules_id' =>  7,
          'created_at' => new DateTime,
          'updated_at' =>  new Datetime,
        ));
    }
}
