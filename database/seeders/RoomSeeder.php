<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            ['name' => 'Living Room'],
            ['name' => 'Kitchen'],
            ['name' => 'Bathroom'],
            ['name' => 'Hallway']
        ];

        foreach($rooms as $room){
            Room::insert($room);
        }
    }
}
