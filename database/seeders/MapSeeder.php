<?php

namespace Database\Seeders;

use App\Models\Map;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pivots = [
            // Living Room
            [
                'room_id' => 1, 
                'chore_id' => 1,
                'person_id' => 1
            ],
            [
                'room_id' => 1, 
                'chore_id' => 1,
                'person_id' => 1
            ],

            // Kitchen
            [
                'room_id' => 2, 
                'chore_id' => 2,
                'person_id' => 2
            ],
            [
                'room_id' => 2, 
                'chore_id' => 3,
                'person_id' => 1
            ],
            [
                'room_id' => 2, 
                'chore_id' => 5,
                'person_id' => 2
            ],

            // Bathroom
            [
                'room_id' => 3, 
                'chore_id' => 2,
                'person_id' => 1
            ],
            [
                'room_id' => 3, 
                'chore_id' => 4,
                'person_id' => 3
            ],
            [
                'room_id' => 3, 
                'chore_id' => 5,
                'person_id' => 1
            ],

            // Hallway
            [
                'room_id' => 4, 
                'chore_id' => 1,
                'person_id' => 3
            ],
            [
                'room_id' => 4, 
                'chore_id' => 5,
                'person_id' => 3
            ]
        ];

        foreach($pivots as $pivot){
            Map::insert($pivot);
        }



    }
}
