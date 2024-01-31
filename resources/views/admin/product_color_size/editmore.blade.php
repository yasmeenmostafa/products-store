@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">

            {{-- @include('errors') --}}

        
            <form action="{{url('/home/products/updatemore')}}" method="POST" enctype="multipart/form-data">
              @csrf
                {{-- @method('put') --}}
                <h3 class="text-white lead">update product</h3>

            {{-- @include('admin.inc.errors') --}}

                <div class="form-group">
                    <label for="exampleInputEmail1">product size</label>
                  <input type="text" name="size" value="{{$product->product_size}}" placeholder="product size " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">product color</label>
                  <input type="text" name="color" value="{{$product->product_color}}" placeholder="product color " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">product quantity</label>
                  <input type="text" name="quantity" value="{{$product->quantity}}" placeholder="product quantity " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
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