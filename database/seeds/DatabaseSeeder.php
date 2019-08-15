<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(BookSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(FavoriteSeeder::class);
        $this->call(FavoriteDetailSeeder::class);
        $this->call(RateSeeder::class);
    }
}
