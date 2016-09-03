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
        return $this->belongsToMany('App\Ingredient')->withPivot('quantity_id');
    }

    public function getIngredientsAttribute()
    {
        return $this->ingredientsInfo();
    }

    public function ingredientsInfo()
    {
        $ingredient_ids = $this->ingredients()->get()->lists('id');
        $recipe = [];

        foreach ($ingredient_ids as $ingredient_id) {
            $ingredient = Ingredient::find($ingredient_id);
            $recipe[] = ['ingredient' => $ingredient, 'quantity' => $ingredient->quantity($this->id)];
        }

        return $recipe;
    }
}
