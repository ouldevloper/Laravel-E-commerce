<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function insert(Request $r){
        if($r->isMethod('post')) {
            $cat = new Category;
            $cat->label = $r->input('label');
            $cat->description = $r->input('description');
            $cat->save();
            return Redirect("/category/manage");
        }
        else{
            return view("category.insert");
        }
    }

    public function manage(){
        $cats = Category::all();
        return view("category.display",["categories"=>$cats]);
    }

    public function update(Request $r,int $id){
        if($r->isMethod('post')) {
            $cat = Category::find($id);
            $cat->label = $r->input('label');
            $cat->description = $r->input('description');
            $cat->save();
            return Redirect("/category/manage");
        }else{
            
            $cat = Category::find($id);
            return view("category.update",['category'=>$cat]);
        }
    }

    public function delete($id){
        $cat = Category::find($id);
        $cat->delete();
        return Redirect("/category/manage");

    }
}
