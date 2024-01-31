<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColorSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show()
    {
        $data['products'] = Product::all();
        return view('admin.product.show')->with($data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin.product.create')->with($data);
    }
    public function insert(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "color" => "required|string",
            "size" => "required|string",
            "desc" => "required|string",
            "image" => "required|image",
            "name" => "required|string",
            "price" => "required",
            "quantity" => "required|integer",
            "discount" => "nullable",
            "category_id" => "required|exists:categories,id",

        ]);
        $new_image = $data['image']->hashName();
        $data['image']->move('uploads', $new_image);
        $data['image'] = $new_image;
        $product_id = Product::insertGetId([
            "name" => $data['name'],
            "image" => $data['image'],
            "desc" => $data['desc'],
            "price" => $data['price'],
            "discount" => $data['discount'],
            "category_id" => $data['category_id'],
        ]);

        ProductColorSize::insert([
            "quantity" => $data['quantity'],
            "discount" => $data['discount'],
            "price" => $data['price'],
            "product_size" => $data['size'],
            "product_color" => $data['color'],
            "product_id" => $product_id,
        ]);
        return redirect('/home/products')->withSuccess('added product successfully');
    }

    public function edit($id)
    {
        $data['product'] = Product::findOrFail($id);
        $data['categories'] = Category::all();
        return view('admin.product.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            "id"=>"required",
            "category_id" => "required",
            "name" => "required|string",
            "image" => "nullable|image",
            "price" => "required",
            "discount" => "required",
        ]);

        $old_img = Product::findOrFail($data['id'])->image;
        if ($request->hasFile('image')) {
            Storage::delete('uploads/' . $old_img);

            $new_image = $data['image']->hashName();
            $data['image']->move('uploads', $new_image);
            $data['image'] = $new_image;
        } else {
            $data['image'] = $old_img;
        }


        Product::findOrFail($data['id'])->update($data);
        return redirect("/home/products")->withSuccess(' product updated successfully');
    }

    public function delete($id){
        $data=Product::findOrFail($id);
        Storage::delete('uploads/'.$data['image']);
        Product::findOrFail($id)->delete();
         return redirect('/home/products')->withSuccess('deleted successfully');

    }
}
