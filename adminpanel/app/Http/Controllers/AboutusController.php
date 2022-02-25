<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus;
use Illuminate\Support\Facades\Redirect;

class AboutusController extends Controller
{
    public function manage(Request $r){
        $about = Aboutus::all();
        if($r->isMethod('post')){
            if(isset($about) || count($about)>0){
                $a = $about->first();
                $a->title = $r->input('title');
                $a->description = $r->input('description');
                if($r->hasfile('img_path')){
                    $fileName = time().'_'.$r->file('img_path')->getClientOriginalName();
                    $filePath = $r->file('img_path')->storeAs('uploads', $fileName, 'public');
                    $a->img_path = "/storage/".$filePath;
                }else{
                    $a->img_path = $a->img_path;
                }
                $a->update();
            }else{
                $a = new Aboutus();
                $a->title = $r->input('title');
                $a->description = $r->input('description');
                if($r->hasfile('img_path')){
                    $fileName = time().'_'.$r->file('img_path')->getClientOriginalName();
                    $filePath = $r->file('img_path')->storeAs('uploads', $fileName, 'public');
                    $a->img_path = "/storage/".$filePath;
                }
                $a->save();
            }
            return Redirect('/aboutus');
        }else{
            return view("aboutus.manage",['about'=>$about->first()]);
        }
    }
}
