<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    public function program(){
        return view('participation/program');
    }
    public function call(){
        return view('participation/call');
    }
    public function social (){
        return view('participation/social');
    }
    public function registration (){
        return view('participation/registration');
    }
    public function guidelines(){
        return view('participation/guidelines');
    }
}
