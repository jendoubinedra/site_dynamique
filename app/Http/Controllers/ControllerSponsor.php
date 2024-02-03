<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Sponsor;

class ControllerSponsor extends Controller
{


    public function formSponsor(){
        return view('sponsors/addsponsor');

    }
    public function affichage(){
        $sponsors=Sponsor::all();
        return view('sponsor',compact('sponsors'));

    }
    //get all the Sponsors
    public function getall(){
        $sponsors=Sponsor::all();
        return view('sponsor',compact('sponsors'));
    }

    // get the Sponsor by id
    public function getbyid($id){
        $sponsors = Sponsor::find($id);
        $sponsors=[$sponsors];
        return view('sponsors/sponsor',compact('sponsors'));
    }

    // add new Sponsor
    public function add(Request $request)
{
    // Vérifiez si le fichier source est présent dans la requête
    if ($request->hasFile('src') && $request->file('src')->isValid()) {
        $image = time() . $request->file('src')->getClientOriginalName();

        // Déplacez le fichier vers le répertoire public/images
        $request->file('src')->move(public_path('images'), $image);

        // Créez l'enregistrement du sponsor avec le chemin de l'image
        $data = $request->all();
        $data['src'] = 'images/' . $image;
        Sponsor::create($data);

        return redirect(route('formS.index'));
    } else {
        // Gérez le cas où le fichier source est manquant ou invalide
        return redirect()->back()->with('error', 'Le fichier source est manquant ou invalide.');
    }
}


      // edit Sponsor
      public function edit($id){
        $sponsor = Sponsor::find($id);
        return view('sponsors/edit_sponsor',compact('sponsor')) ;
    }

    // update Sponsor
    public function update($id, Request $request){
        $sponsor=Sponsor::find($id);
        if (File::exists(public_path($sponsor->src))) {
            File::delete(public_path($sponsor->src));
        }
        $image=time().$request->src->getClientOriginalName();
        $request->src->move(public_path('images'),$image);
        $data = $request->all();
        $data['src'] = 'images/'.$image;
        $sponsor->update($data);
        return redirect(route('sponsors.index'));
    }

    //delete Sponsor
    public function delete($id){
        $sponsor=Sponsor::find($id);
        $sponsor->delete();
        return redirect(route('listeS.index'));
    }

}
