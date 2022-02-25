<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    protected $table = "contactus";
    protected $fillable = [
        'title',
        'description',
        'img_path',
    ];
}
