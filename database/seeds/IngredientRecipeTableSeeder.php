<?php

use Illuminate\Database\Seeder;

class IngredientRecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_recipe')->insert([
            ['ingredient_id' => '1', 'recipe_id' => '1', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '2', 'recipe_id' => '1', 'quantity_id' => '1', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '3', 'recipe_id' => '1', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '4', 'recipe_id' => '1', 'quantity_id' => '1', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '5', 'recipe_id' => '1', 'quantity_id' => '1', 'value' => 'Малку', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '1', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '7', 'recipe_id' => '2', 'quantity_id' => '1', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '8', 'recipe_id' => '2', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '9', 'recipe_id' => '2', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '2', 'quantity_id' => '2', 'value' => '1/3', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '11', 'recipe_id' => '2', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '12', 'recipe_id' => '2', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '13', 'recipe_id' => '3', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '14', 'recipe_id' => '3', 'quantity_id' => '1', 'value' => '5', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '3', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '15', 'recipe_id' => '3', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '15', 'recipe_id' => '3', 'quantity_id' => '1', 'value' => 'До MAX линијата', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '4', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '16', 'recipe_id' => '4', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '17', 'recipe_id' => '4', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '4', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '4', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '18', 'recipe_id' => '4', 'quantity_id' => '3', 'value' => '10', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '3', 'recipe_id' => '4', 'quantity_id' => '10', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '19', 'recipe_id' => '4', 'quantity_id' => '10', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '20', 'recipe_id' => '4', 'quantity_id' => '1', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '21', 'recipe_id' => '4', 'quantity_id' => '1', 'value' => 'До MAX линијата', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '22', 'recipe_id' => '5', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '23', 'recipe_id' => '5', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '24', 'recipe_id' => '5', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '16', 'recipe_id' => '5', 'quantity_id' => '4', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '5', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '25', 'recipe_id' => '5', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '6', 'quantity_id' => '4', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '6', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '9', 'recipe_id' => '6', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '27', 'recipe_id' => '6', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '13', 'recipe_id' => '6', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '28', 'recipe_id' => '6', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '29', 'recipe_id' => '6', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '6', 'quantity_id' => '1', 'value' => 'До MAX линијата', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '30', 'recipe_id' => '7', 'quantity_id' => '1', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '21', 'recipe_id' => '7', 'quantity_id' => '5', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '31', 'recipe_id' => '7', 'quantity_id' => '6', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '12', 'recipe_id' => '7', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '32', 'recipe_id' => '7', 'quantity_id' => '1', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '33', 'recipe_id' => '7', 'quantity_id' => '5', 'value' => '3', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '21', 'recipe_id' => '7', 'quantity_id' => '2', 'value' => '1/3', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '34', 'recipe_id' => '7', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '35', 'recipe_id' => '7', 'quantity_id' => '6', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '8', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '36', 'recipe_id' => '8', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '8', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '37', 'recipe_id' => '8', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '4', 'recipe_id' => '8', 'quantity_id' => '6', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '38', 'recipe_id' => '8', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '25', 'recipe_id' => '8', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '21', 'recipe_id' => '8', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '32', 'recipe_id' => '9', 'quantity_id' => '1', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '12', 'recipe_id' => '9', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '1', 'recipe_id' => '9', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '39', 'recipe_id' => '9', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '40', 'recipe_id' => '9', 'quantity_id' => '1', 'value' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '41', 'recipe_id' => '9', 'quantity_id' => '1', 'value' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '10', 'quantity_id' => '4', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '42', 'recipe_id' => '10', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '13', 'recipe_id' => '10', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '43', 'recipe_id' => '10', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '44', 'recipe_id' => '10', 'quantity_id' => '6', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '31', 'recipe_id' => '10', 'quantity_id' => '6', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '10', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '7', 'recipe_id' => '11', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '45', 'recipe_id' => '11', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '43', 'recipe_id' => '11', 'quantity_id' => '5', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '44', 'recipe_id' => '11', 'quantity_id' => '1', 'value' => 'Малку', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '11', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '33', 'recipe_id' => '12', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '12', 'recipe_id' => '12', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '32', 'recipe_id' => '12', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '46', 'recipe_id' => '12', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '47', 'recipe_id' => '12', 'quantity_id' => '5', 'value' => '5', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '35', 'recipe_id' => '12', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '40', 'recipe_id' => '12', 'quantity_id' => '6', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '48', 'recipe_id' => '12', 'quantity_id' => '6', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '13', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '20', 'recipe_id' => '13', 'quantity_id' => '1', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '9', 'recipe_id' => '13', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '13', 'recipe_id' => '13', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '43', 'recipe_id' => '13', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '38', 'recipe_id' => '13', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '31', 'recipe_id' => '13', 'quantity_id' => '6', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '13', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '37', 'recipe_id' => '14', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '50', 'recipe_id' => '14', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '52', 'recipe_id' => '14', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '53', 'recipe_id' => '14', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '14', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '15', 'quantity_id' => '4', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '15', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '15', 'quantity_id' => '5', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '55', 'recipe_id' => '15', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '31', 'recipe_id' => '15', 'quantity_id' => '6', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '15', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '16', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '16', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '2', 'recipe_id' => '16', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '37', 'recipe_id' => '16', 'quantity_id' => '7', 'value' => '4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '57', 'recipe_id' => '16', 'quantity_id' => '5', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '58', 'recipe_id' => '16', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '59', 'recipe_id' => '16', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '25', 'recipe_id' => '16', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '17', 'quantity_id' => '4', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '17', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '13', 'recipe_id' => '17', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '60', 'recipe_id' => '17', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '31', 'recipe_id' => '17', 'quantity_id' => '6', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '17', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '18', 'quantity_id' => '4', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '18', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '2', 'recipe_id' => '18', 'quantity_id' => '1', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '61', 'recipe_id' => '18', 'quantity_id' => '5', 'value' => '4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '18', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '18', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '7', 'recipe_id' => '19', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '51', 'recipe_id' => '19', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '11', 'recipe_id' => '19', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '19', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '49', 'recipe_id' => '20', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '64', 'recipe_id' => '20', 'quantity_id' => '1', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '20', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '20', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '11', 'recipe_id' => '20', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '21', 'recipe_id' => '20', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '49', 'recipe_id' => '21', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '21', 'quantity_id' => '1', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '13', 'recipe_id' => '21', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '21', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '21', 'recipe_id' => '21', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '58', 'recipe_id' => '21', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '27', 'recipe_id' => '22', 'quantity_id' => '5', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '65', 'recipe_id' => '22', 'quantity_id' => '5', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '58', 'recipe_id' => '22', 'quantity_id' => '5', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '44', 'recipe_id' => '22', 'quantity_id' => '6', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '22', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '23', 'quantity_id' => '4', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '49', 'recipe_id' => '23', 'quantity_id' => '1', 'value' => '6', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '65', 'recipe_id' => '23', 'quantity_id' => '6', 'value' => '2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '66', 'recipe_id' => '23', 'quantity_id' => '1', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '67', 'recipe_id' => '23', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '49', 'recipe_id' => '24', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '24', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '11', 'recipe_id' => '24', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '10', 'recipe_id' => '24', 'quantity_id' => '2', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '58', 'recipe_id' => '24', 'quantity_id' => '5', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '29', 'recipe_id' => '25', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '40', 'recipe_id' => '25', 'quantity_id' => '8', 'value' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '69', 'recipe_id' => '25', 'quantity_id' => '5', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '1', 'recipe_id' => '26', 'quantity_id' => '4', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '49', 'recipe_id' => '26', 'quantity_id' => '1', 'value' => '5', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '7', 'recipe_id' => '26', 'quantity_id' => '1', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '69', 'recipe_id' => '26', 'quantity_id' => '6', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '31', 'recipe_id' => '26', 'quantity_id' => '1', 'value' => 'Малку', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '21', 'recipe_id' => '26', 'quantity_id' => '1', 'value' => 'До MAX линијата', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

            ['ingredient_id' => '7', 'recipe_id' => '27', 'quantity_id' => '1', 'value' => '1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '49', 'recipe_id' => '27', 'quantity_id' => '2', 'value' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '70', 'recipe_id' => '27', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '59', 'recipe_id' => '27', 'quantity_id' => '2', 'value' => '1/4', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '61', 'recipe_id' => '27', 'quantity_id' => '9', 'value' => '3', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['ingredient_id' => '6', 'recipe_id' => '27', 'quantity_id' => '2', 'value' => '1 1/2', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        ]);
    }
}
