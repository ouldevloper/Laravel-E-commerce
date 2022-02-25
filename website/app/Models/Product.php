<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = [
        'title',
        'price',
        'description',
        'quantity',
        'category_id',
    ];

    public function Category(){
        return $this->belongsTo("App\Models\Category");
    }
    
}
