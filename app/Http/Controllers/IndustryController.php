<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index(){
        $sectors = Sector::get();
        return view('industries', [
            'sectors' => $sectors, 
            'count' => totalCounts()
        ]);
    }
}
