<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // ['id', 'name', 'category']

    protected $fillable = ['name', 'category'];

    protected $appends = ['ingredients'];

//    protected $hidden = ['ingredients'];

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient')->withPivot('quantity_id', 'value');
    }

    public function getIngredientsAttribute()
    {
        return $this->ingredientsInfo();
    }

    public function ingredientsInfo()
    {
        $ingredients = $this->ingredients()->get();
        $recipe = [];

        foreach ($ingredients as $ingredient) {
            $pivot = $ingredient->pivot;

            $recipe[] = ['ingredient' => $ingredient, 'quantity' => Quantity::find($pivot->quantity_id), 'value' => $pivot->value];
        }

        return $recipe;
    }
}
