<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{   
    // Show main index
    public function index(){

        return view('index', [
            'rooms' => Room::get(),
            'tables' => Site::tables()
        ]);
    }
}
