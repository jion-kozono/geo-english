<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClearedRecord extends Model
{
    protected $fillable = [
        'id',
        'test',
        'cleared_count',
    ];
}
