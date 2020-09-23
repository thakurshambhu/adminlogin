<?php

use Illuminate\Database\Seeder;

class AdminCredentials extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' =>'Yogesh Sharma',
            'email' =>'admin@yopmail.com',
            'profile_pic'=>'1589913210.jpg',
            'password' =>bcrypt('smartdata'),
        ]);
    }
}
