<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persons = [
            ['name' => 'David'],
            ['name' => 'Jennifer'],
            ['name' => 'Michael']
        ];

        foreach($persons as $persons){
            Person::insert($persons);
        }
    }
}
