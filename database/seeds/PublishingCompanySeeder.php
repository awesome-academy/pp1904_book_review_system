<?php

use Illuminate\Database\Seeder;
use App\Models\PublishingCompany;

class PublishingCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PublishingCompany::class, 10)->create();
    }
}
