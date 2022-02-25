<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function insert(){
        return view("product.insert");
    }

    public function manage(){
        return \view("product.dispaly");
    }

    public function update($id){

    }

    public function delete($id){
        
    }
}
