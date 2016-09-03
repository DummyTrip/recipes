<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // ['id', 'name', 'category']

    protected $fillable = ['name', 'category'];

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient')->withPivot('quantity_id');
    }
}
