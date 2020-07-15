<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\User::create([
       'name' => 'Akshay Sarawgi',
       'email' => 'sarawgi.akshay05@gmail.com',
       'password' => bcrypt('password')
       ]);
    }
}
