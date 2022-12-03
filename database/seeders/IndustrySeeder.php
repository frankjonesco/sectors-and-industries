<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
            ['name' => 'Manufacturing'],
            ['name' => 'Retail'],
            ['name' => 'Wholesale']
        ];

        foreach($industries as $industry){
            Industry::create($industry);
        }
    }
}
