<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Chore;
use Illuminate\Http\Request;

class ChoreController extends Controller
{
    public function index(){
        return view('chores.index', [
            'rooms' => Chore::get()
        ]);
    }

    public function show(Map $map){
        return view('chores.show', [
            'map' => $map,
            'room' => $map->room,
            'chore' => $map->chore->first(),
        ]);
    }
}
