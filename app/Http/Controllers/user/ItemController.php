<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductColorSize;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($id){
        $data['product']=Product::findOrFail($id);
        $data['productcolors']=ProductColorSize::select('product_color')->where('product_id',"=",$id)->distinct()->get();
        $data['productsizes']=ProductColorSize::select('product_size')->where('product_id',"=",$id)->distinct()->get();
        return view('user.item')->with($data);
    }
}
