<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $rooms = Room::get();

        foreach($rooms as $key => $room){
            $rooms[$key]->chores = $room->chores->groupBy('name');
            $rooms[$key]->persons = $room->persons->groupBy('name');
        }

        return view('index', [
            'rooms' => $rooms
        ]);
    }
}
