<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DryingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drying_methods')->insert([
            [
                'name' => 'Fresh',
            ],
            [
                'name' => 'Kiln Dried'
            ],
            [
                'name' => 'Air Dried'
            ]
        ]);
    }
}