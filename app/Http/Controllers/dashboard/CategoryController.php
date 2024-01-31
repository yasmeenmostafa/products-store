<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
   public function show(){
    $data['categories']=Category::all();
    return view('admin.category.show')->with($data);
   }


   public function edit($id){
    $data['category']=Category::findOrFail($id);
    $data['categories']=Category::all();
    return view('admin.category.edit')->with($data);
   }

   public function update(Request $request){
    $data=$request->validate([
        "parent_id"=>"nullable",
        "id"=>"required",
        "name"=>"required|string",
        "image"=>"nullable|image",
    ]);
   
    $old_img=Category::findOrFail($data['id'])->image;     
    if($request->hasFile('image')){
        Storage::delete('uploads/'.$old_img);

        $new_image=$data['image']->hashName();
        $data['image']->move('uploads',$new_image);
         $data['image']=$new_image;
    }
    else{
        $data['image']=$old_img;
    }

   
    Category::findOrFail($data['id'])->update($data);
    return redirect("/home/categories")->withSuccess(' setting updated successfully');


   }

   public function create(){
    $data['categories']=Category::all();
    return view("admin.category.create")->with($data);
   }

   public function insert(Request $request){
    $data=$request->validate([
        "name"=>"required|string",
        "image"=>"required|image",
        "parent_id"=>"nullable|exists:categories,id"
    ]);

    $new_image=$data['image']->hashName();
    $data['image']->move('uploads',$new_image);
     $data['image']=$new_image;

     Category::insert($data);
     return redirect('/home/categories')->withSuccess('added successfully');
   }

   public function delete($id){
    $data=Category::findOrFail($id);
    Storage::delete('uploads/'.$data['image']);
     Category::findOrFail($id)->delete();
    Category::where('parent_id',$id)->delete();
    return redirect('/home/categories')->withSuccess('deleted successfully');

   }
}
