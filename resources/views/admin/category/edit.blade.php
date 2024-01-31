@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">

            {{-- @include('errors') --}}

        
            <form action="{{url('/home/categories/update')}}" method="POST" enctype="multipart/form-data">
              @csrf
                {{-- @method('put') --}}
                <h3 class="text-white lead">update category</h3>

            {{-- @include('admin.inc.errors') --}}

                <div class="form-group">
                    <label for="exampleInputEmail1">category name</label>
                  <input type="text" name="name" value="{{$category->name}}" placeholder="category name " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file" name="image" placeholder=" image "value="{{'uploads/'.$category->image}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    <div class="w-25"><img width="100px" src="{{asset('uploads/'.$category->image)}}"  alt="hh"></div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1"> select main category</label>
                  <select name="parent_id" class="form-control" id="exampleFormControlSelect1">
                    <option value="">Maincategory</option>
                    @foreach ($categories as $c)       
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                  </select>
                </div>
              <input type="hidden" name='id' value="{{$category->id}}">
                <button type="submit" class="btn btn-primary">update</button>
              </form>
            
            
           
          </div>
@endsection