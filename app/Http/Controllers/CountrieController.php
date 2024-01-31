<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countrie;

class CountrieController extends Controller
{
    //formulaire countrie
    public function formCountrie(){
        return view('countries/addcountrie');
    }
    //get all the Countrie
    public function getall(){
        $countries=Countrie::all();
        return view('countries/liste',compact('countries'));
    }

    // get the Countrie by id
    public function getbyid($id){
        $countries = Countrie::find($id);
        $countries=[$countries];
        return view('countries/countrie',compact('countries'));
    }



    // add new Countrie
    public function add(Request $request){
       // Countrie::create($request->all());
        return redirect(route('countries.index'));
    }

     // edit Countrie
     public function edit($id) {
        // Assuming 'Countrie' is the model and 'id_countrie' is the correct column name
        $countrie = Countrie::where('id_countries', $id)->first();

        // Check if the record was found
        if (!$countrie) {
            // Handle the case where the record is not found, for example, redirect to an error page.
            return redirect()->route('error.page')->with('error', 'Record not found');
        }

        // Pass the single record to the 'edit_countrie' view
        return view('countries.edit_countrie', compact('countrie'));
    }

    // update Countrie
    public function update($id, Request $request){
        $video=Countrie::find($id);
        $video->update($request->all());
        return redirect(route('countries.index'));
    }

    //delete Countrie
    public function delete($id){
        $video=Countrie::find($id_countries);
        $video->delete();
        return redirect(route('liste.index'));
    }
}
