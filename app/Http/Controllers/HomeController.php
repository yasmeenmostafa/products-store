<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\ReturnTypePass;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    
    public function userhome()
    {
        $data['products']=Product::all();
        return view('user.home')->with($data);
    }
    public function redirectUser(){
        if(auth()->user()->type=='user'){
            return redirect(url('/userhome'));
        }
        else{
            return redirect(url('/home'));    
        }


    }
    
}
