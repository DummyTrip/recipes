<?php

use Illuminate\Database\Seeder;

class RecipeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array();

//        foreach(range(1,10) as $recipe_id) {
//            $data[] = ['recipe_id' => $recipe_id, 'user_id' => 1,'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()];
//        }

        foreach(range(1,27) as $recipe_id) {
            $data[] = ['recipe_id' => $recipe_id, 'user_id' => 2,'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()];
        }
        
        DB::table('recipe_user')->insert(
            $data
        );
    }
}
