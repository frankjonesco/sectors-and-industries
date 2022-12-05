<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Chore;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){

        $rooms = Room::with('chores')->get();

        dd($rooms);

        return view('rooms.index', [
            'rooms' => $rooms
        ]);
    }

    public function show(Room $room){
        return view('rooms.show', [
            'room' => $room,
            'chores' => $room->chores->groupBy('id')
        ]);
    }
}
