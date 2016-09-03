<?php

use Illuminate\Database\Seeder;

class QuantityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quantities')->insert([
            ['id' => 1, 'value' => 1, 'measurement' => 'ml', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        ]);
    }
}
