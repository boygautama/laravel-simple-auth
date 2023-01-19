<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@serah.com',
               'username'=>'admin',
               'type'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Serah User',
               'email'=>'serah@serah.com',
               'username'=>'serah',
               
               'type'=> 'serah',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@serah.com',
               'username'=>'user',

               'type'=>'user',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
