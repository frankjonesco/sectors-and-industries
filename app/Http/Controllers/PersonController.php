<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('persons.index', [
            'rooms' => Person::get()
        ]);
    }
}
