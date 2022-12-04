<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Chore;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){

        $room = Room::with('chores')->findOrFail(2);

        dd($room->chores);
        

        return view('rooms.index', [
            'rooms' => Room::get()
        ]);
    }
}
