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
            'email'  => 'trical_venezuela@gmail.com',
            'status' => 'A',
            'created_at'     => new DateTime,
            'updated_at'     => new Datetime,
        ));

        \DB::table('companies')->insert(array(
            'name' =>'Geosinteticos Trical C.A.',
            'email'  => 'geosinteticos_trical@gmail.com',
            'status' => 'A',
            'created_at'     => new DateTime,
            'updated_at'     => new Datetime,
        ));


    }
}
