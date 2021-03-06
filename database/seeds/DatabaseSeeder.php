<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RecipesTableSeeder::class);
         $this->call(IngredientsTableSeeder::class);
         $this->call(QuantityTableSeeder::class);
         $this->call(IngredientRecipeTableSeeder::class);
    }
}
