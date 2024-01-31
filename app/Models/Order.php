<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable=[ 'status', 'payment_method', 'payment_status', 'payment_id', 'total_price', 'shipping_price', 'address', 'phone', 'email', 'username', 'user_id'];


    public function user(){
        return $this->belongsTo(User::class );
    }
    public function orderdetails(){
        return $this->hasMany(OrderDetails::class );
    }
}

