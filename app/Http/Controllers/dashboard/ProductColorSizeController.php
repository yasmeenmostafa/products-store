<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductColorSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductColorSizeController extends Controller
{
    public function showmore($id)
    {
        $data['p_id']=$id;
        $data['products'] = ProductColorSize::where('product_id','=',$id)->orderby('product_size')->get();
        return view('admin.product_color_size.showmore')->with($data);
    }
    public function addmore($product_id)
    {
        $data['product_id']=$product_id;
        return view('admin.product_color_size.addmore')->with($data);
    }
    public function insertmore(Request $request)
    {
        $data = $request->validate([
           
            "product_color" => "required|string",
           "product_size" => "required|string",   
            "price" => "required|integer",
            "quantity" => "required|integer",
            "discount" => "required|integer",
            "product_id" => "required",

        ]);
        ProductColorSize::insert($data);
        return redirect('/home/products/more/'.$data['product_id'])->withSuccess('added product successfully');
    }

    public function delete($id){
        $data=ProductColorSize::findOrFail($id);
        $products= ProductColorSize::where("product_id",'=',$data['product_id'])->count();
        if($products==1){
            ProductColorSize::findOrFail($id)->delete();
            $product=Product::findOrFail($data['product_id']);
            Storage::delete('uploads/'.$product['image']);
             Product::findOrFail($data['product_id'])->delete();
     return redirect('/home/products')->withSuccess('deleted successfully');

        }
        ProductColorSize::findOrFail($id)->delete();
        
         return redirect('/home/products')->withSuccess('deleted successfully');
    }




    public function editmore($id){
        $data['product']=ProductColorSize::findOrFail($id);
       
        return view('admin.product.editmore')->with($data);
       }
       public function updatemore(Request $request){
        $data=$request->validate([
            "id"=>"required",
            "price"=>"string|required",
            "quantity"=>"integer|required",
            "discount"=>"string|required",
            "size"=>"string|required",
            "color"=>"required|string",
        ]);
        $dataa= ProductColorSize::findOrFail($data['id']);
        $p_id=$dataa['product_id'];
        ProductColorSize::findOrFail($data['id'])->update($data);
        return redirect('/home/products/more/'.$p_id)->withSuccess(' product updated successfully');
      
    }
   
}
