<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Use Faker\Factory as Faker;
/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 09/09/16
 * Time: 10:56 AM
 */
class UserTableSeeder extends Seeder
{
    public function run(){

        $faker = Faker::create();

        for($i =0; $i <30; $i ++){
            \DB::table('users')->insert(array(
                'first_name'     => $faker->firstName,
                'last_name'      => $faker->lastName,
                'email'          => $faker->unique()->email,
                'password'       => \Hash::make('123456'),
                'type'           => 'user',
                'created_at'     => new DateTime,
                'updated_at'     => new Datetime,
            ));
        }


    }
}