<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Chore;

class ChoreController extends Controller
{
    // Show all chores
    public function index(){
        return view('chores.index', [
            'chores' => Chore::get()
        ]);
    }

    // Show single chore
    public function show(Map $map){
        return view('chores.show', [
            'map' => $map,
            'room' => $map->room,
            'chore' => $map->chore->first(),
        ]);
    }
}
