<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UserVocab;
use Faker\Generator as Faker;

$factory->define(UserVocab::class, function (Faker $faker) {
    return [
        'user_id'=>'1',
        'user_question'=>'1',
        'user_answer'=>'2',
    ];
});
