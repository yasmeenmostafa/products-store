@extends('admin.inc.layout')
@section('content')
    <div class="content-wrapper">


        <form method="POST" action="" enctype="multipart/form-data" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">product Name</label>
                <input type="text" name="name" class="form-control text-white" id="exampleInputEmail1"
                    aria-describedby="emailHelp" >
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">product desc</label>
                <textarea type="text" name="desc" class="form-control text-white" id="exampleInputEmail1"
                    aria-describedby="emailHelp"></textarea>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">product Price</label>
                <input type="number" name="price" class="form-control text-white" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">product quantity</label>
                <input type="text" name="quantity" class="form-control text-white" id="exampleInputEmail1"
                    aria-describedby="emailHelp" >
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">old image</label>
                <img width="100" alt="" srcset="">
                <input type="file" name="image" class="form-control text-white" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>
   @endsection
