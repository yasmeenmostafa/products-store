@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">

            <form action="{{url('/home/products/insertmore')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <h3 class="text-white lead">add product</h3>

            {{-- @include('admin.inc.errors') --}}

                
                <div class="form-group">
                    <label for="exampleInputEmail1">product price</label>
                  <input type="text" name="price"  placeholder="product price " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">product quantity</label>
                  <input type="text" name="quantity"  placeholder="product quantity " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">product discount</label>
                  <input type="text" name="discount"  placeholder="product discount " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                
               
                <div class="form-group">
                    <label for="exampleInputEmail1">size</label>
                    <input type="text" name="product_size" placeholder=" size " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">color</label>
                    <input type="text" name="product_color" placeholder=" color " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <input type="hidden" name="product_id" value="{{$product_id}}">
               
               
                <button type="submit" class="btn btn-primary">Add product</button>
              </form>
             
            
            
           
          </div>
@endsection