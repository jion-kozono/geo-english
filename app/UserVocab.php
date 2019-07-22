<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVocab extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'user_question',
        'user_answer',
    ];
}
