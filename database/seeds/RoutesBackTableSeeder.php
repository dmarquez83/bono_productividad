<?php

use Illuminate\Database\Seeder;

class RoutesBackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('routes')->insert(array(
            'name_route'     => 'Registrar Usuario',
            'description'     => 'Registrar Usuario',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/users/create',
            'name' =>  'admin.users.create',
            'action' =>  'App\Http\Controllers\Admin\UsersController@create',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('routes')->insert(array(
            'name_route'     => 'Listar Usuario',
            'description'     => 'Listar Usuario',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/users',
            'name' =>  'admin.users.index',
            'action' =>  'App\Http\Controllers\Admin\UsersController@index',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Registrar Grupos',
            'description'     => 'Registrar Grupos',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/groups/create',
            'name' =>  'admin.groups.create',
            'action' =>  'App\Http\Controllers\Admin\GroupsController@create',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Listar Grupos',
            'description'     => 'Listar Grupos',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/groups',
            'name' =>  'admin.groups.index',
            'action' =>  'App\Http\Controllers\Admin\GroupsController@index',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Asignar Usuarios a Grupos',
            'description'     => 'Asignar Usuarios a Grupos',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/groups-users/create',
            'name' =>  'admin.groups-users.create',
            'action' =>  'App\Http\Controllers\Admin\GroupsUsersController@create',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('routes')->insert(array(
            'name_route'     => 'Registrar Empresas',
            'description'     => 'Registrar Empresas',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/companies/create',
            'name' =>  'admin.companies.create',
            'action' =>  'App\Http\Controllers\Admin\CompaniesController@create',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Listar Empresas',
            'description'     => 'Listar Empresas',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/companies',
            'name' =>  'admin.companies.index',
            'action' =>  'App\Http\Controllers\Admin\CompaniesController@index',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
        \DB::table('routes')->insert(array(
            'name_route'     => 'Registrar Modulos',
            'description'     => 'Registrar Modulos',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/modules/create',
            'name' =>  'admin.modules.create',
            'action' =>  'App\Http\Controllers\Admin\ModulesController@create',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Listar Modulos',
            'description'     => 'Listar Modulos',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/modules',
            'name' =>  'admin.modules.index',
            'action' =>  'App\Http\Controllers\Admin\ModulesController@index',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Registrar Mantenimiento de Pantallas',
            'description'     => 'Registrar Mantenimiento de Pantallas',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/menu-modules/create',
            'name' =>  'admin.menu-modules.create',
            'action' =>  'App\Http\Controllers\Admin\MenuModulesController@create',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Listar Mantenimiento de Pantallas',
            'description'     => 'Listar Mantenimiento de Pantallas',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/menu-modules',
            'name' =>  'admin.menu-modules.index',
            'action' =>  'App\Http\Controllers\Admin\MenuModulesController@index',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Registrar Derechos de Accesos',
            'description'     => 'Registrar Derechos de Accesos',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/access-modules/create',
            'name' =>  'admin.access-modules.create',
            'action' =>  'App\Http\Controllers\Admin\AccessModulesController@create',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('routes')->insert(array(
            'name_route'     => 'Listar Derechos de Accesos',
            'description'     => 'Listar Derechos de Accesos',
            'method'     => 'GET|HEAD',
            'uri' =>  'admin/access-modules',
            'name' =>  'admin.access-modules.index',
            'action' =>  'App\Http\Controllers\Admin\AccessModulesController@index',
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
    }
}
