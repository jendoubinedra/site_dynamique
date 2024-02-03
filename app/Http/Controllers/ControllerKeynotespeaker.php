<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keynotespeaker;

class ControllerKeynotespeaker extends Controller
{
   public function viewkeynote(){

    return view ('keyNoteSpeakers/keynotepage');
   }
    public function Keynotes(){
        $keynotes=Keynotespeaker::all();
        return view('keyNoteSpeakers/keynote',compact('keynotes'));
    }
    //formulair
    public function speaker(){
        return view('keyNoteSpeakers/speaker');
    }
      //get all the speaker
      public function getall(){
        $keynotes=Keynotespeaker::all();
        return view('keyNoteSpeakers/keynotepage',compact('keynotes'));
    }

    // get the speaker by id
    public function getbyid($id){
        $keynotes = Keynotespeaker::find($id);
        $keynotes=[$keynotes];
        return view('keyNoteSpeakers/speaker',compact('keynotes'));
    }

    // add new speaker

    public function add(Request $request){
        // Check if 'src' file is present in the request
        if ($request->hasFile('src')) {
            // Generate a unique image filename using the current timestamp
            $image = time() . $request->file('src')->getClientOriginalName();

            // Move the uploaded file to the 'imagess' directory
            $request->file('src')->move(public_path('imagess'), $image);

            // Create an array with all the request data
            $data = $request->all();

            // Set the 'image' key in the $data array to the path of the uploaded image
            $data['src'] = 'imagess/' . $image;

            // Create a new Organizer instance with the $data array and save it to the database
            Organizer::create($data);

            // Redirect to the index route
            return redirect(route('speaker.index'));
        } else {
            // Handle the case where 'src' file is not present in the request
            return redirect()->back()->with('error', 'Please upload an image.');
        }
    }


     // edit speaker

    public function edit(Keynotespeaker $keynote){
        return view('keyNoteSpeakers/edit',compact('keynote'));
    }

    // update speaker
    public function update($id, Request $request){
        $keynote=Keynotespeaker::find($id);
        $keynote->update($request->all());
        return redirect(route('liste.index'));
    }

    //delete speaker
    public function delete($id){
        $keynote=Keynotespeaker::find($id);
        $keynote->delete();
        return redirect(route('liste.index'));
    }
}
