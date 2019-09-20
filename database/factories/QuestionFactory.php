<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'cource_level'=>'1',
        'question_grade'=>'1',
        'question'=>'apple',
        'option_1'=>'りんご',
        'option_2'=>'みかん',
        'option_3'=>'時間',
        'option_4'=>'運動会',
    ];
});
