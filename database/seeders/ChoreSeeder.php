<?php

namespace Database\Seeders;

use App\Models\Chore;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chores = [
            ['name' => 'Vacuum'],
            ['name' => 'Mop Floor'],
            ['name' => 'Wash Dishes'],
            ['name' => 'Clean Toilet'],
            ['name' => 'Clean Windows']
        ];

        foreach($chores as $chore){
            Chore::insert($chore);
        }
    }
}
