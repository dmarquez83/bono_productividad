<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Group;
use App\Models\GroupUser;

class GroupsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = User::all();

        $faker = Faker::create('es_VE');

        foreach ($userId as $user) {
            $max_group = $faker->numberBetween($min = 1, $max = 3);
            for ($i = 0; $i < $max_group; $i++) {
                $userGroups =  GroupUser::where('user_id', '=', $user->id)->get();
                //echo $userGroups.'aqui'.$user->id;
                $cantidad = count($userGroups);
                if ($cantidad>0){
                    foreach ($userGroups as $userGroup) {
                        $numero_grupo= $faker->numberBetween($min = 1, $max = 7);
                        if($userGroup->group_id!=$numero_grupo){
                            $numero_grupo=$numero_grupo;
                        }else{
                            $numero_grupo= $faker->numberBetween($min = 1, $max = 7);
                            if($userGroup->group_id!=$numero_grupo){
                                $numero_grupo=$numero_grupo;
                            }
                        }
                    }
                }else{
                    $numero_grupo= $faker->numberBetween($min = 1, $max = 7);
                }

                \DB::table('groups_users')->insert(array(
                    'created_at' => new DateTime,
                    'updated_at' => new Datetime,
                    'user_id' => $user->id,
                    'group_id' =>$numero_grupo
                    //$postTags = $tags->random(rand(2, 4));
                ));
            }
        }
    }
}
