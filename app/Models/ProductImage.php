<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function product_color_size(){
        return $this->belongsTo(ProductColorSize::class );
    }
    
}
