<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
   public function insert(Request $r){
       if($r->isMethod('post')){
        $u = new User;
        $u->name = $r->input('name');
        $u->username = $r->input('username');
        $u->email = $r->input('email');
        $u->password = $r->input('password');
        if($r->hasfile('img_path'))
        {
            $file = $r->file('img_path');
            $fileName = time().'_'.$r->input('username').'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $u->image_path = "/storage/".$filePath;
        } 
        $u->role = $r->input('role');
        $u->save();
        return Redirect("/user/manage");
       }else{
           return view('user.insert');
       }
   }

   public function update(Request $r,$id){
        $u = User::find($id);
        if($r->isMethod('post')){
            $u->name      =     $r->input('name') ;
            $u->username  = $r->input('username') ;
            $u->email =         $r->input('email') ;
            $u->role =          $r->input('role') ;
            $u->update();
            return Redirect('/user/manage');
        }else{
            return view('user.update',['user'=>$u]);
        }
   }

   public function delete($id){
        $u = User::find($id);
        $u->delete();
        return Redirect("/user/manage");
   }

   public function manage(){
        $u = User::all();
        return view("user.display",['users'=>$u]);
   }
}
