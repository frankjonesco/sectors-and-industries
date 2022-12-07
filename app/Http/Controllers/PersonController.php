<?php

namespace App\Http\Controllers;

use App\Models\Person;

class PersonController extends Controller
{
    // Show all persons
    public function index(){
        return view('persons.index', [
            'persons' => Person::get()
        ]);
    }
}
