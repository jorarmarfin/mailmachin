<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'Luis Mayta',
        	'email'=>'luis.mayta@gmail.com',
        	'password'=>'321654987'
        ]);
    }
}
