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
            ['id' => 1, 'measurement' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'measurement' => 'Шолја', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'measurement' => 'Зрна', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'measurement' => 'Рака', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'measurement' => 'Голема лажица', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'measurement' => 'Лажичка', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'measurement' => 'Парчиња', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 8, 'measurement' => 'Прстофат', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 9, 'measurement' => 'Листови', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['id' => 10, 'measurement' => 'Парче', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],

//            ['id' => 2, 'value' => '1/4', 'measurement' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 3, 'value' => '1/2', 'measurement' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 4, 'value' => 'Малку', 'measurement' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 9, 'value' => '5', 'measurement' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 10, 'value' => 'До max линија', 'measurement' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 18, 'value' => '2', 'measurement' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 26, 'value' => '6', 'measurement' => '', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//
//            ['id' => 5, 'value' => '1', 'measurement' => 'Шолја', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 6, 'value' => '1/3', 'measurement' => 'Шолја', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 7, 'value' => '1/4', 'measurement' => 'Шолја', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 8, 'value' => '1/2', 'measurement' => 'Шолја', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 11, 'value' => '10', 'measurement' => 'Зрна', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 12, 'value' => '1', 'measurement' => 'Рака', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 13, 'value' => '1 1/2', 'measurement' => 'Шолја', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 14, 'value' => '1', 'measurement' => 'Голема лажица', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 15, 'value' => '2', 'measurement' => 'Големи лажици', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 16, 'value' => '1', 'measurement' => 'Лажичка', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 17, 'value' => '3/4', 'measurement' => 'Шолја', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 19, 'value' => '3', 'measurement' => 'Големи лажици', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 20, 'value' => '1/2', 'measurement' => 'Лажичка', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 21, 'value' => '1/2', 'measurement' => 'Големи лажица', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 22, 'value' => '5', 'measurement' => 'Големи лажици', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 23, 'value' => '1/4', 'measurement' => 'Лажичка', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 24, 'value' => '4', 'measurement' => 'Парчиња', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 25, 'value' => '4', 'measurement' => 'Големи лажици', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 27, 'value' => '2', 'measurement' => 'Лажички', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 28, 'value' => '1', 'measurement' => 'Прстофат', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 29, 'value' => '1 1/2', 'measurement' => 'Голема лажица', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
//            ['id' => 30, 'value' => '3', 'measurement' => 'Листови', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        ]);
    }
}
