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
                'room_id' => 1, // Living room
                'chore_id' => 1, // Vacuum
                'person_id' => 1 // David
            ],
            [
                'room_id' => 1, // Living room
                'chore_id' => 5, // Clean windows
                'person_id' => 1 // David
            ],

            // Kitchen
            [
                'room_id' => 2, // Kitchen
                'chore_id' => 2, // Mop floor
                'person_id' => 2 // Jennifer
            ],
            [
                'room_id' => 2, // Kitchen
                'chore_id' => 3, // Wash dishes
                'person_id' => 1 // David
            ],
            [
                'room_id' => 2, // Kitchen
                'chore_id' => 5, // Clean windows
                'person_id' => 2 // Jennifer
            ],

            // Bathroom
            [
                'room_id' => 3, // Bathroom
                'chore_id' => 2, // Mop floor
                'person_id' => 1 // David
            ],
            [
                'room_id' => 3, // Bathroom
                'chore_id' => 4, // Clean toilet
                'person_id' => 3 // Michael
            ],
            [
                'room_id' => 3, // Bathroom
                'chore_id' => 5, // Clean windows
                'person_id' => 1 // David
            ],

            // Hallway
            [
                'room_id' => 4, // Hallway
                'chore_id' => 1, // Vacuum
                'person_id' => 3 // Michael
            ],
            [
                'room_id' => 4, // Hallway
                'chore_id' => 5, // Clean windows
                'person_id' => 3 // Michael
            ]
        ];

        foreach($pivots as $pivot){
            Map::insert($pivot);
        }



    }
}
