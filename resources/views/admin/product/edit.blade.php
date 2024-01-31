@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">

            {{-- @include('errors') --}}

        
            <form action="{{url('/home/products/update')}}" method="POST" enctype="multipart/form-data">
              @csrf
                {{-- @method('put') --}}
                <h3 class="text-white lead">update product</h3>

            {{-- @include('admin.inc.errors') --}}

                <div class="form-group">
                    <label for="exampleInputEmail1">product name</label>
                  <input type="text" name="name" value="{{$product->name}}" placeholder="product name " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"> select main category</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach ($categories as $c)       
                      <option value="{{$c->id}}">{{$c->name}}</option>
                      @endforeach
                    </select>
                  </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file" name="image" placeholder=" image "value="{{'uploads/'.$product->image}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    <div class="w-25"><img width="100px" src="{{asset('uploads/'.$product->image)}}"  alt="hh"></div>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">product price</label>
                  <input type="text" name="price" value="{{$product->price}}" placeholder="product price " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">product discount</label>
                  <input type="text" name="discount" value="{{$product->discount}}" placeholder="product discount " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <input type="hidden" name="id" value="{{$product->id}}">
                <button type="submit" class="btn btn-primary">update</button>
              </form>
            
            
           
          </div>
@endsection