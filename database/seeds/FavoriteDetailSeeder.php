<?php

use Illuminate\Database\Seeder;
use App\Models\FavoriteDetail;

class FavoriteDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FavoriteDetail::class, 50)->create();
    }
}
