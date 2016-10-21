<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 09/09/16
 * Time: 10:56 AM
 */
class AdminUserTableSeeder extends Seeder
{
    public function run(){

        \DB::table('users')->insert(array(
            'username'     => 'root',
            'password' =>  \Hash::make('12345678'),
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));

        \DB::table('users')->insert(array(
            'username'     => 'admin',
            'password' =>  \Hash::make('admin'),
            'status' =>  'A',
            'created_at' => new DateTime,
            'updated_at' =>  new Datetime,
        ));
    }
}
