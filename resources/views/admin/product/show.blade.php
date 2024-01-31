@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">
            <a class="btn btn-primary my-3 p-2" href="{{url('/home/products/create')}}"> Add product</a>

            {{-- @include('errors') --}}
        
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">category</th>
                    <th scope="col">image</th>
                    <th scope="col">price</th>
                    <th scope="col">discount</th>
                   
                  
                    <th scope="col">edit</th>
                    <th scope="col"> delete</th>
                    <th scope="col">view more</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category_id}}</td>
                    <td><img src="{{asset('uploads/'.$product->image)}}" width="100px" alt=""></td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount}}</td>
                    <td> <h1>
                      <a class="btn btn-warning" href="{{url('/home/products/edit/'.$product->id)}}" >edit</a>
                  </h1></td>
                    <td> <h1>
                        <a class="btn btn-danger" href="{{url('/home/products/delete/'.$product->id)}}" >delete</a>
                    </h1></td>
                    <td> <h1>
                      <a class="btn btn-success" href="{{url('/home/products/more/'.$product->id)}}" >view more...</a>
                  </h1></td>

                </tr>
                @endforeach
             
            
            
                </tbody>
              </table>
            
            
           
          </div>
@endsection