<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors = [
            ['name' => 'Defence'],
            ['name' => 'Health'],
            ['name' => 'Transport']
        ];

        foreach($sectors as $sector){
            Sector::create($sector);
        }

    }
}
