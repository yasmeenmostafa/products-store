@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">

            <form action="{{url('/home/products/insert')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <h3 class="text-white lead">add product</h3>

            {{-- @include('admin.inc.errors') --}}

                <div class="form-group">
                    <label for="exampleInputEmail1">product name</label>
                  <input type="text" name="name"  placeholder="product name " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
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
                    <label for="exampleInputEmail1">product description</label>
                  <input type="text" name="desc"  placeholder="product description " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file" name="image" placeholder=" image " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">size</label>
                    <input type="text" name="size" placeholder=" size " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">color</label>
                    <input type="text" name="color" placeholder=" color " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1"> select category</label>
                  <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                  
                    @foreach ($categories as $c)       
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                  </select>
                </div>
               
                <button type="submit" class="btn btn-primary">Add product</button>
              </form>
             
            
            
           
          </div>
@endsection