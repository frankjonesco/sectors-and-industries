<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Room;

class RoomController extends Controller
{   
    // Show all rooms
    public function index(){
        return view('rooms.index', [
            'rooms' => Room::get()
        ]);
    }

    // Show single room
    public function show(Room $room){
        return view('rooms.show', [
            'room' => $room,
            'chores' => $room->chores->groupBy('id')
        ]);
    }

    // Show a single room's chore persons
    public function showChorePersons(Room $room, Map $map){
        return view('rooms.show-chore-persons', [
            'map' => $map,
            'room' => $map->room,
            'chore' => $map->chore->first()
        ]);
    }

}
