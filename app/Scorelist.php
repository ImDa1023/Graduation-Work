<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scorelist extends Model
{
    //
    protected $fillable = [
        'title',
        'artist',
        'composer',
        'arranger',
        'publisher',
    ];
}
