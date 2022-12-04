<?php

namespace Database\Seeders;

use App\Models\ChoreRoom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChoreRoomSeeder extends Seeder
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
                'chore_id' => 1 // Vacuum
            ],
            [
                'room_id' => 1,
                'chore_id' => 5 // Clean windows
            ],

            // Kitchen
            [
                'room_id' => 2,
                'chore_id' => 2 // Mop floor
            ],
            [
                'room_id' => 2,
                'chore_id' => 3 // Wash dishes
            ],
            [
                'room_id' => 2,
                'chore_id' => 5 // Clean windows
            ],

            // Bathroom
            [
                'room_id' => 3,
                'chore_id' => 2 // Mop floor
            ],
            [
                'room_id' => 3,
                'chore_id' => 4 // Clean toilet
            ],
            [
                'room_id' => 3,
                'chore_id' => 5 // Clean windows
            ],

            // Hallway
            [
                'room_id' => 4,
                'chore_id' => 1 // Vacuum
            ],
            [
                'room_id' => 4,
                'chore_id' => 5 // Clean windows
            ]
            ];

            foreach($pivots as $pivot){
                ChoreRoom::insert($pivot);
            }
    }
}
