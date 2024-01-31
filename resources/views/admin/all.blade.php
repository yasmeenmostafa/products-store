@extends('admin.inc.layout')
@section('content')

          <div class="content-wrapper">

            {{-- @include('errors') --}}
        
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col " class="w-25">Desc</th>
                    <th scope="col">image</th>
                    <th scope="col">Aciton</th>
                  </tr>
                </thead>
                <tbody>
                   
                  <tr>
                      <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img src="" width="100px" alt="" srcset=""></td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        <h1>
                            <a class="btn btn-success" href="" >edit</a>
                        </h1>
                    </td>
                </tr>
             
            
            
                </tbody>
              </table>
            
            
           
          </div>
@endsection
    