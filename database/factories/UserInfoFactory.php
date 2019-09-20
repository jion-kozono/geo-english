<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UserInfo;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'user_name'=>'kazuo',
        'password'=>'aaaaa1111',
        'user_email'=>'ka@ki.jp',
    ];
});
