<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new User();
       $user->name = 'Eric';
       $user->email= 'eric@gmail.com';
       $user->password = bcrypt('123123');
       $user->role= 'superadmin';
       $user->save();

    }
}
