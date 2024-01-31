@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">

            {{-- @include('errors') --}}

        
            <form action="{{url('/home/settings/update')}}" method="POST" enctype="multipart/form-data">
              @csrf
                {{-- @method('put') --}}
                <h3 class="text-white lead">update settings</h3>

            @include('admin.inc.errors')

                <div class="form-group">
                    <label for="exampleInputEmail1">project name</label>
                  <input type="text" name="title" value="{{$setting->title}}" placeholder="project name " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">description</label>
                  <input type="text" name="desc" value="{{$setting->desc}}" class="form-control" id="exampleInputPassword1" placeholder="description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">address</label>
                    <input type="text" name="address" value="{{$setting->address}}" placeholder=" address " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">phone</label>
                    <input type="text" name="phone" value="{{$setting->phone}}"placeholder=" phone " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="text" name="email" placeholder=" email "value="{{$setting->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">logo</label>
                    <input type="file" name="logo" placeholder=" logo "value="{{'uploads/'.$setting->logo}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    <div class="w-25"><img width="100px" src="{{asset('uploads/'.$setting->logo)}}"  alt="hh"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">favicon</label>
                    <input type="file" name="favicon" placeholder=" favicon "value="{{'uploads/'.$setting->favicon}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    <div class="w-25"><img width="100px" src="{{asset('uploads/'.$setting->favicon)}}"  alt="hh"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">facebook</label>
                    <input type="text" name="facebook" placeholder=" facebook "value="{{$setting->facebook}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">twitter</label>
                    <input type="text" name="twitter" placeholder=" twitter "value="{{$setting->twitter}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">insatgram</label>
                    <input type="text" name="instagram" placeholder=" instagram "value="{{$setting->instagram}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">youtube</label>
                    <input type="text" name="youtube" placeholder=" youtube "value="{{$setting->youtube}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                
                <button type="submit" class="btn btn-primary">update</button>
              </form>
            
            
           
          </div>
@endsection