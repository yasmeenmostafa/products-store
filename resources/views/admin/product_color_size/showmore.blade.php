@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">
            <a class="btn btn-primary my-3 p-2" href="{{url('/home/products/addmore/'.$p_id)}}"> Add more colors or sizes</a>

            {{-- @include('errors') --}}
        
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">size</th>
                    <th scope="col">color</th>
                    <th scope="col">quantity</th>
                    <th scope="col">price</th>
                    <th scope="col">discount</th>
                   
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->product_size}}</td>
                    <td>{{$product->product_color}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount}}</td>
                    
                    <td> <h1>
                        <a class="btn btn-danger" href="{{url('/home/products/remove/'.$product->id)}}" >delete</a>
                    </h1></td>

                </tr>
                @endforeach
             
            
            
                </tbody>
              </table>
            
            
           
          </div>
@endsection