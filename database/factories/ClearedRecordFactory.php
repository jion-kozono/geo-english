<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ClearedRecord;
use Faker\Generator as Faker;

$factory->define(ClearedRecord::class, function (Faker $faker) {
    return [
        'test'=>'3',
        'cleared_count'=>'2',
    ];
});
