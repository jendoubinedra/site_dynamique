<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialsession;

class SpecialsessionController extends Controller
{
    public function viewsession(){

        return view('session/addsession');
    }
     //get all the Specialsession
     public function getall(){
        $specialsessions=Specialsession::all();
        return view('session/specialse',compact('specialsessions'));
    }

    // get the Specialsession by id
    public function getbyid($id){
        $specialsessions = Specialsession::find($id);
        $specialsessions=[$specialsessions];
        return view('specialsessions/specialsession',compact('specialsessions'));
    }

    // add new Specialsession
    public function add(Request $request){
        Specialsession::create($request->all());
        return redirect(route('viewsession.index'));
    }

      // edit Specialsession
      public function edit($id){
        $specialsession = Specialsession::find($id);
        return view('session/edit',compact('specialsession')) ;
    }


    // update Specialsession
    public function update($id, Request $request){
        $specialsession=Specialsession::find($id);
        $specialsession->update($request->all());
        return redirect(route('specialsessions.index'));
    }

    //delete Specialsession
    public function delete($id){
        $specialsession=Specialsession::find($id);
        $specialsession->delete();
        return redirect(route('liste.index'));
    }
}
