<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Use Faker\Factory as Faker;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // $faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));

        for($i =0; $i <15; $i ++){
            \DB::table('companies')->insert(array(
                'name' => $faker->unique()->company,
                'cpnyid' => $faker->companySuffix,
                'email'  => $faker->unique()->companyEmail,
                'status' => 'A',
                'created_at'     => new DateTime,
                'updated_at'     => new Datetime,
            ));
        }
    }
}
