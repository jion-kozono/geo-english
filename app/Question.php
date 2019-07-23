<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'id',
        'question_grade',
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'answer',
    ];
}
