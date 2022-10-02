<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('species')->insert([
            [
                'name' => 'Pine',
            ],
            [
                'name' => 'Spruce'
            ],
            [
                'name' => 'Fir'
            ],
            [
                'name' => 'Birch'
            ],
            [
                'name' => 'Apple Tree'
            ]
        ]);
    }
}