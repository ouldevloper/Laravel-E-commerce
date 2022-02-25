<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Redirect;

class SocialMediaController extends Controller
{
    public function insert(Request $r){
        if($r->isMethod('post')){
            $sm = new SocialMedia();
            $sm->link = $r->input('link');
            $sm->icon_path = $r->input('icon');
            $sm->save();
            return Redirect('/socialmedia/manage');
        }else{
            return view("socialmedia.insert");
        }
    }

    public function manage(){
        $sm = SocialMedia::all();
        return \view("socialmedia.display",['social'=>$sm]);
    }

    public function update(Request $r,$id){
        $sm = SocialMedia::find($id);
        if($r->isMethod('post')){
            $sm->link = $r->input('link')??$sm->link;
            $sm->icon_path = $r->input('icon')??$sm->icon_path;
            $sm->update();
            return Redirect('/socialmedia/manage');
        }else{
            return view('socialmedia.update',['social'=>$sm]);
        }
    }

    public function delete($id){
        (SocialMedia::find($id))->delete();
        return Redirect("/socialmedia/manage");
    }
}
