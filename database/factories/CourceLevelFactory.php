<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CourceLevel;
use Faker\Generator as Faker;

$factory->define(CourceLevel::class, function (Faker $faker) {
    return [
        'cource_level'=>'1',
        'cource_name_id'=>'2',
    ];
});
