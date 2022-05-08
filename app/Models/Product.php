<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
      'id',
      'name',
      'price',
      'country',
      'c_id'
    ];

    function images(){
        return $this->belongsToMany(Image::class,'product_images',"product_id","image_id");
    }
}
