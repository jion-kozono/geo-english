<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourceLevel extends Model
{
    protected $fillable = [
        'id',
        'cource_level',
        'cource_name_id',
    ];
}
