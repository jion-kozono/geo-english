<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestName extends Model
{
    protected $fillable = [
        'id',
        'test_name',
        'skill_flag',
    ];
}
