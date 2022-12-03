<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pivots = [
            // Defense
            [
                'hex' => Str::random(11),
                'sector_id' => 1,
                'industry_id' => 1 
            ],
            [
                'hex' => Str::random(11),
                'sector_id' => 1,
                'industry_id' => 3 
            ],

            // Health
            [
                'hex' => Str::random(11),
                'sector_id' => 2,
                'industry_id' => 1 
            ],
            [
                'hex' => Str::random(11),
                'sector_id' => 2,
                'industry_id' => 2
            ],
            [
                'hex' => Str::random(11),
                'sector_id' => 2,
                'industry_id' => 3 
            ],

            // Transport
            [
                'hex' => Str::random(11),
                'sector_id' => 3,
                'industry_id' => 1 
            ],
            [
                'hex' => Str::random(11),
                'sector_id' => 3,
                'industry_id' => 2
            ],
            [
                'hex' => Str::random(11),
                'sector_id' => 3,
                'industry_id' => 3 
            ]
        ];

        foreach($pivots as $pivot){
            DB::table('industry_sector')->insert($pivot);
        }
    }
}
