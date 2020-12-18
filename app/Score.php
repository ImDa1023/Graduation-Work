<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
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
