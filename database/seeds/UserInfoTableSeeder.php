<?php

use Illuminate\Database\Seeder;
use App\UserInfo;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_info')->insert([
            'user_name' => Str::random(10),
            'password' => Str::random(20),
            'user_email' => Str::random(10).'@gmail.com',
        ]);
    }
}
