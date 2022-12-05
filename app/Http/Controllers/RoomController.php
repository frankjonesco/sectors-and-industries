<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Chore;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){

        $rooms = Room::with('chores')->get();

        // $persons = $room->persons;
        // $persons = $persons->groupBy('name');

        // dd($persons);
        // foreach($persons as $person){
        //     echo $person.', ';
        // }
        
        // dd($rooms);
        return view('rooms.index', [
            'rooms' => $rooms
        ]);
    }
}
