<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'specy' => 'Spruce',
                'grade' => 'Nordic Blue/A1',
                'drying_method' => 'Fresh',
                'treatment' => 'Heat Treated',
                'thickness' => 50,
                'width' => 150,
                'height' => 1200
            ],
            [
                'specy' => 'Spruce',
                'grade' => 'Nordic Blue/A1',
                'drying_method' => 'Fresh',
                'treatment' => 'Heat Treated',
                'thickness' => 50,
                'width' => 120,
                'height' => 1200
            ],
            [
                'specy' => 'Fir',
                'grade' => 'Nordic Blue/A1',
                'drying_method' => 'Fresh',
                'treatment' => 'Heat Treated',
                'thickness' => 50,
                'width' => 100,
                'height' => 3000
            ],
            [
                'specy' => 'Fir',
                'grade' => 'Nordic Blue/A1',
                'drying_method' => 'Fresh',
                'treatment' => null,
                'thickness' => 50,
                'width' => 120,
                'height' => 1200
            ],
            [
                'specy' => 'Fir',
                'grade' => 'Nordic Blue/A1',
                'drying_method' => 'Fresh',
                'treatment' => null,
                'thickness' => 90,
                'width' => 90,
                'height' => 2000,
            ],
            [
                'specy' => 'Pine',
                'grade' => 'Tegernseer/IV',
                'drying_method' => 'Fresh',
                'treatment' => 'Heat Treated',
                'thickness' => 40,
                'width' => 90,
                'height' => 1200
            ]
        ]);
    }
}