<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $fillable = [
        'label',
        'description',
    ];

    public function Product(){
        return $this->hasOne("App\Models\Product");
    }
}
