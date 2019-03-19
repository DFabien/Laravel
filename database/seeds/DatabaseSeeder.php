<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    protected $toTruncate = ['category', 'article'];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        foreach($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }
        $this->call(CategoryTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        Model::reguard();
    }
}
