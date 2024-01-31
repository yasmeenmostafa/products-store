<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
   public function show(){
    $data=Setting::first();
    return view('admin.setting')->with('setting',$data);
   }

   public function update(Request $request){
  
    $data=$request->validate([
        "title"=>"required|string",
        "facebook"=>"required|string",
        "instagram"=>"required|string",
        "youtube"=>"required|string",
        "twitter"=>"required|string",
        "desc"=>"required|string",
        "address"=>"required|string",
        "phone"=>"required|string",
        "logo"=>"nullable|image",
        "favicon"=>"nullable|image",
    ]);
   
    $old_img=Setting::first()->logo;     
    if($request->hasFile('logo')){
        Storage::delete('uploads/'.$old_img);

        $new_image=$data['logo']->hashName();
        $data['logo']->move('uploads',$new_image);
         $data['logo']=$new_image;
    }
    else{
        $data['logo']=$old_img;
    }

    $old_favicon=Setting::first()->favicon;     
    if($request->hasFile('favicon')){
        Storage::delete('uploads/'.$old_favicon);

        $new_image=$data['favicon']->hashName();
        $data['favicon']->move('uploads',$new_image);
         $data['favicon']=$new_image;
    }
    else{
        $data['favicon']=$old_favicon;
    }

    Setting::first()->update($data);
    return redirect("/home")->withSuccess(' setting updated successfully');


   }
}
