<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $guarded=['id']; 
     public function product(){
        return $this->belongsTo(Product::class );
    }
    public function orderdetails(){
        return $this->hasMany(OrderDetails::class );
    }


}
