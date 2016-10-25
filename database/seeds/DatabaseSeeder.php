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
        $this->call(UsersTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(QuantityTableSeeder::class);
        $this->call(IngredientRecipeTableSeeder::class);
        $this->call(RecipeUserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
    }
}
