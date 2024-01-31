<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ProductColorSize;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function show(Request $request){

        $data=$request->validate([
            "id"=>"required",
            "color"=>"required",
            "size"=>"required",
            "quantity"=>"required",
        ]);
        $userid=1;
        $product=ProductColorSize::join('products', 'product_color_sizes.product_id', '=', 'products.id')->where([
            ["product_id","=",$data['id']],
            ["product_color","=",$data['color']],
            ["product_size","=",$data['size']],
            ])->get();
           
           $product=$product[0];
        //  dd($product);
        CartFacade::session($userid)->add(array(
            'id' =>  Str::random(3),
            'name'=> $product->name,
            'image'=> $product->image,
            'price' => $product->price,
            'discount' => $product->discount,
            'quantity' => $data['quantity'],
            'attributes' => array(),
            'associatedModel' => $product
        ));
        $data['cart']= CartFacade::session($userid)->getContent()->toarray();
        $data['total'] = CartFacade::session($userid)->getTotal();
        return view('user.cart')->with($data);
       }
    
    
       public function delete($id){
        $userid=1;
        CartFacade::session($userid)->remove($id);
        $data['cart']= CartFacade::session($userid)->getContent()->toarray();
        $data['total'] = CartFacade::session($userid)->getTotal();
        return view('user.cart')->with($data);
       }

}
