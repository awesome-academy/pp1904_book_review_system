<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Romance', 'slug' => 'romance'],
            ['name' => 'Action & Adventure', 'slug' => 'action-&-adventure'],
            ['name' => 'Mystery & Thriller', 'slug' => 'mystery-&-thriller'],
            ['name' => 'Biographies & History', 'slug' => 'biographies-&-history'],
            ['name' => 'Chidren’s', 'slug' => 'chidren’s'],
            ['name' => 'Young Adult', 'slug' => 'young-adult']
        ]);
    }
}
