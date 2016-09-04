<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    // ['id','measurement']

    protected $fillable = ['measurement'];

    public function ingredient()
    {

    }
}
