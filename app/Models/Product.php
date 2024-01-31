<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function category(){
        return $this->belongsTo(Category::class );
    }
   
    public function product_color_size(){
        return $this->hasMany(ProductColorSize::class ,'product_color_size_id');
    }
}
