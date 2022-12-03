<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustryMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pivots = [
            // GSK
            [
                'industry_sector_id' => 3,
                'company_id' => 1,
            ],
            [
                'industry_sector_id' => 4,
                'company_id' => 1,
            ],
            [
                'industry_sector_id' => 5,
                'company_id' => 1,
            ],

            // Thales
            [
                'industry_sector_id' => 1,
                'company_id' => 2,
            ],
            [
                'industry_sector_id' => 2,
                'company_id' => 2,
            ],

            // TFL
            [
                'industry_sector_id' => 6,
                'company_id' => 3,
            ],
            [
                'industry_sector_id' => 7,
                'company_id' => 3,
            ],
            [
                'industry_sector_id' => 8,
                'company_id' => 3,
            ],
        ];

        foreach($pivots as $pivot){
            DB::table('industry_maps')->insert($pivot);
        }
    }
}
