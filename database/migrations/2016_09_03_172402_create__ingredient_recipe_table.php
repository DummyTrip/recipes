<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateIngredientRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_recipe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingredient_id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->integer('quantity_id')->unsigned();
            $table->string('value');
            $table->timestamps();
        });

        Schema::table('ingredient_recipe', function (Blueprint $table) {
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('quantity_id')->references('id')->on('quantities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ingredient_recipe');
    }
}
