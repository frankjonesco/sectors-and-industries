<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use App\Models\Company;
use App\Models\Industry;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    public function index(){
        $sector = new Sector();
        dd($sector->getTest());
        // dd(Sector::first()->companies);
        $sectors = Sector::get();
        return view('sectors', [
            'sectors' => $sectors,
            'count' => totalCounts()
        ]);
    }
}
