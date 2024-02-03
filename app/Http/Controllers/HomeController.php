<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizer;
class HomeController extends Controller
{
    public function index(){
        $organizers=Organizer::all();
        return view('index',compact('organizers'));

    }
}
