<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $fillable = [
        'user_id',
        'title',
        'author',
        'pages',
    ];
}
