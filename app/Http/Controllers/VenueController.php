<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function Heraklion(){
        return view('venue/heraclino');

    }
    public function Hotel(){
        return view('venue/hotel');

    }
    public function conference(){
        return view('venue/conference');

    }
}
