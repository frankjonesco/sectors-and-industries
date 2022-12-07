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
    public function show(Chore $chore){
        return view('chores.show', [
            'chore' => $chore,
        ]);
    }
}
