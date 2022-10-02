<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                'name' => 'Nordic Blue/A1',
            ],
            [
                'name' => 'Nordic Blue/A2'
            ],
            [
                'name' => 'Nordic Blue/A3'
            ],
            [
                'name' => 'Nordic Blue/A4'
            ],
            [
                'name' => 'Nordic Blue/B'
            ],
            [
                'name' => 'Tegernseer/O',
            ],
            [
                'name' => 'Tegernseer/I'
            ],
            [
                'name' => 'Tegernseer/II'
            ],
            [
                'name' => 'Tegernseer/III'
            ],
            [
                'name' => 'Tegernseer/IV'
            ],
            [
                'name' => 'Tegernseer/V'
            ]
        ]);
    }
}