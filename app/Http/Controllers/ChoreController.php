<?php

namespace App\Http\Controllers;

use App\Models\Chore;
use Illuminate\Http\Request;

class ChoreController extends Controller
{
    public function index(){
        return view('chores.index', [
            'rooms' => Chore::get()
        ]);
    }
}
