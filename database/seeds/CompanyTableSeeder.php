<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('companies')->insert(array(
            'name' =>'Trical de Venezuela C.A.',
            'email'  => 'Geosinteticos Trical C.A.',
            'status' => 'A',
            'created_at'     => new DateTime,
            'updated_at'     => new Datetime,
        ));
        $faker = Faker::create('es_VE');
        // $faker->addProvider(new CompanyNameGenerator\FakerProvider($faker)); --

    }
}
