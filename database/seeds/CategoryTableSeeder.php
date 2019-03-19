<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'id_category' => 1,
                'category' => 'The Lost Abbey',
            ],
            [
                'id_category' => 2,
                'category' => 'Port Brewing',
            ],
            [
                'id_category' => 3,
                'category' => 'Jester King',
            ],
            [
                'id_category' => 4,
                'category' => 'Old Nation',
            ],
            [
                'id_category' => 5,
                'category' => 'Jester King',
            ],

        ]);
    }
}
