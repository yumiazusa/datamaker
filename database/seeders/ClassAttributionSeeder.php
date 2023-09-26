<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassAttributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ClassAttribution::factory(40)->create();
    }
}
