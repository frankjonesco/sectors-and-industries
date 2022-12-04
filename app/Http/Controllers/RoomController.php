<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){

        $room = Room::findOrFail(1);
        dd($room->chores);

        return view('rooms.index', [
            'rooms' => Room::get()
        ]);
    }
}
