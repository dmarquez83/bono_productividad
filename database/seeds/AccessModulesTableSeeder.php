<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuModule;

class AccessModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MenuModules = MenuModule::all();
        foreach ($MenuModules as $MenuModule) {
            for ($i = 1; $i <= 2; $i++) {
                \DB::table('access_modules')->insert(array(
                    'type_user' => 'Usuario',
                    'id_type_user' => $i,
                    'companies_all' => true,
                    'menu_modules_id' => $MenuModule->id,
                    'acc_consult' => true,
                    'acc_update' => true,
                    'acc_insert' => true,
                    'acc_remove' => true,
                    'acc_special' => true,
                    'acc_authorize' => true,
                    'created_at' => new DateTime,
                    'updated_at' => new Datetime,
                ));
            }
        }
    }
}
