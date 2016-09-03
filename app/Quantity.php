<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    // ['id', 'value', 'measurement']

    protected $fillable = ['value', 'measurement'];

    public function ingredient()
    {

    }
}
