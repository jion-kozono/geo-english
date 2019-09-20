<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\TestName;
use Faker\Generator as Faker;

$factory->define(TestName::class, function (Faker $faker) {
    return [
        'test_name'=>'実力テスト',
        'skill_flag'=>'1',
    ];
});
