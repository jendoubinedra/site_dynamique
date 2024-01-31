<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Link;

class PageController extends Controller
{

 public function viewpage(){
    
 }
    //formulaire aad page
    public function formP(){
        return view ('page/pages');
    }
    //get all the page
    public function getall(){
        $pages=Page::with('links')->get();
        return view('page/listeP',compact('pages'));
    }

    // get the page by id
    public function getbyid($id){
        $pages = Page::with('links')->find($id);
        $pages=[$pages];
        return view('page/pages',compact('pages'));
    }

    // add new page
    public function add(Request $request){
        Page::create($request->all());
        return redirect(route('formP.index'));
    }

    // update page
    public function update($id, Request $request){
        $page=Page::find($id);
        $page->update($request->all());
        return redirect(route('listeP.index'));
    }

     // update page
     public function edit(Page $page){
        return view('/page/edit',compact('page'));
    }

    //delete page
    public function delete($id){
        $page=Page::find($id);
        $page->delete();
        return redirect(route('listeP.index'));
    }

}
