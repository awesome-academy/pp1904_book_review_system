<?php

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            ['issue' => 'Inappropriate Content'],
            ['issue' => 'Harassment'],
            ['issue' => 'Policy Violation'],
            ['issue' => 'Spam'],
            ['issue' => 'Other']
        ]);
    }
}
