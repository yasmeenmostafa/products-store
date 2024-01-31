@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">
            <a class="btn btn-primary my-2 p-1" href="{{url('/home/categories/create')}}"> Add Category</a>

            {{-- @include('errors') --}}
        
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    
                    <th scope="col">image</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                   
                    <td><img src="{{asset('uploads/'.$category->image)}}" width="100px" alt=""></td>
                    <td> <h1>
                        <a class="btn btn-success" href="{{url('/home/categories/edit/'.$category->id)}}" >edit</a>
                    </h1></td>
                    <td>
                        <form action="{{url('/home/categories/delete/'.$category->id)}}" method="post">
                            @csrf
                           
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                       
                    </td>

                </tr>
                @endforeach
             
            
            
                </tbody>
              </table>
            
            
           
          </div>
@endsection