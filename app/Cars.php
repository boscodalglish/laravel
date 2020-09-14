<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    //
    protected $fillable = ['make', 'model', 'colour', 'top_speed'];
}
