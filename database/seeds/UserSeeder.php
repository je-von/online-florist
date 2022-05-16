<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => bcrypt('admin123'),
                'phone' => '99999999',
                'gender' => 'male',
                'address' => '12345 Street',
                'profile_pic_path' => 'user/73b47e53-dccd-4baf-b6ba-b22824287bba.png',
                'role' => 'admin'
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Dummy Account',
                'email' => 'dummy@mail.com',
                'password' => bcrypt('dummy123'),
                'phone' => '77777777',
                'gender' => 'female',
                'address' => '6789 Street',
                'profile_pic_path' => 'user/73b47e53-dccd-4baf-b6ba-b22824287bba.png',
                'role' => 'member'
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Jevon',
                'email' => 'jevon@mail.com',
                'password' => bcrypt('jevon123'),
                'phone' => '123456789',
                'gender' => 'male',
                'address' => 'Jalan Bedugul No. 1',
                'profile_pic_path' => 'user/18e31680-1cbc-4df8-9d2e-58ab90f7f562.jpg',
                'role' => 'member'
            ]
        );
    }
}
