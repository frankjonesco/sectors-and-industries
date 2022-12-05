<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Chore;
use Illuminate\Http\Request;

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

}
