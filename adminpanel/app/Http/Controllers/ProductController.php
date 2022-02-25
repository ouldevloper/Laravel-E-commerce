<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function insert(Request $r){
        if($r->isMethod("post")){
            $p = new Product;
            $p->title=$r->input('title');
            $p->price=(int)$r->input('price');
            $p->description=$r->input('description');
            $p->quantity=(int)$r->input('quantity');
            $p->category_id=1;//$r->input('category');
            $p->save();
            if($r->hasfile('images'))
            {
                foreach($r->file('images') as $file)
                {
                    $img = new Image;
                    $fileName = time().'_'.$file->getClientOriginalName();
                    $filePath = $file->storeAs('uploads', $fileName, 'public');
                    $img->product_id = $p->id;
                    $img->image_path = "/storage/".$filePath;
                    $img->save();
                }
            }       
            return Redirect("product/manage");
        }else 
        return view("product.insert",['categories'=>Category::all()]);
    }
    
    public function manage(){
        $products = Product::all();
        return view("product.display",['products'=>$products]);
    }
    public function update(Request $r,$id){
        if($r->isMethod('get')){
            $product = Product::find($id);
            return view("product.update",['product'=>$product]);
        }
        else{
            $product = Product::find($id);
            $product->title=        $r->input('title');
            $product->price=        (int)$r->input('price');
            $product->description=  $r->input('description');
            $product->quantity=     (int)$r->input('quantity');
            $product->category_id=  $r->input('category');
            $product->save();
            return view("product.manage");
        }
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return Redirect("/product/manage");
    }   
}
