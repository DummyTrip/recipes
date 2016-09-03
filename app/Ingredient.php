<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ingredient extends Model
{
    // ['id', 'name', 'type']

    protected $fillable = ['name', 'type'];

    public function recipes()
    {
        return $this->belongsToMany('App\Recipe')->withPivot('quantity_id');
    }

    public function quantity($recipe_id)
    {
        $quantity_id = $this->recipes()->where('recipe_id', $recipe_id)->first()->pivot->quantity_id;

        return Quantity::find($quantity_id);
    }
}
