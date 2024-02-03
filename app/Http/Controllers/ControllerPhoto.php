<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Photo;


class ControllerPhoto extends Controller
{
   

    public function videoPhoto(){
        $photos=Photo::all();
        return view('photo',compact('photos'));
    }
    //photoform
    public function formF(){
        return view('photos/addphotos');

    }
    //get all the photos
    public function getall(){
        $photos=Photo::all();
        return view('photos/listephoto',compact('photos'));
    }

    // get the photo by id
    public function getbyid($id){
        $photos = Photo::find($id);
        $photos=[$photos];
        return view('photos/addphotos',compact('photos'));
    }

    // add new photo
    public function add(Request $request)
    {
        // Vérifiez si le fichier vpath est présent dans la requête
        if ($request->hasFile('vpath') && $request->file('vpath')->isValid()) {
            $image = time() . $request->file('vpath')->getClientOriginalName();

            // Déplacez le fichier vers le répertoire public/images
            $request->file('vpath')->move(public_path('images'), $image);

            // Créez l'enregistrement de la photo avec le chemin de l'image
            $data = $request->all();
            $data['vpath'] = 'images/' . $image;
            Photo::create($data);

            return redirect(route('formF.index'));
        } else {
            // Gérez le cas où le fichier vpath est manquant ou invalide
            return redirect()->back()->with('error', 'Le fichier vpath est manquant ou invalide.');
        }
    }


      // edit photo
      public function edit($id){
        $photo = Photo::find($id);
        return view('photos/edit',compact('photo')) ;
    }


    // update photo
    public function update($id, Request $request){
        $photo=Photo::find($id);
        if (File::exists(public_path($photo->vpath))) {
            File::delete(public_path($photo->vpath));
        }
        $image=time().$request->vpath->getClientOriginalName();
        $request->vpath->move(public_path('images'),$image);
        $data = $request->all();
        $data['vpath'] = 'images/'.$image;
        $photo->update($data);
        return redirect(route('photos.index'));
    }

    //delete photo
    public function delete($id){
        $photo=Photo::find($id);
        $photo->delete();
        return redirect(route('listephoto.index'));
    }
}
