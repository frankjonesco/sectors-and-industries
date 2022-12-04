<?php

namespace Database\Seeders;

use App\Models\RoomChorePerson;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomChorePersonSeeder extends Seeder
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
                'room_chore_id' => 1, 
                'person_id' => 1
            ],
            [
                'room_chore_id' => 2, 
                'person_id' => 1
            ],

            // Kitchen
            [
                'room_chore_id' => 3,
                'person_id' => 1
            ],
            [
                'room_chore_id' => 4,
                'person_id' => 1
            ],
            [
                'room_chore_id' => 5,
                'person_id' => 2
            ],

            // Bathroom
            [
                'room_chore_id' => 6,
                'person_id' => 1
            ],
            [
                'room_chore_id' => 7,
                'person_id' => 3
            ],
            [
                'room_chore_id' => 8,
                'person_id' => 1
            ],

            // Hallway
            [
                'room_chore_id' => 9,
                'person_id' => 3
            ],
            [
                'room_chore_id' => 10,
                'person_id' => 3
            ]
        ];

        foreach($pivots as $pivot){
            RoomChorePerson::insert($pivot);
        }



    }
}
