@if($errors->any())
<ul class=" list-unstyled">
@foreach ($errors->all() as $error)
   <li  class="alert alert-danger "> {{$error}}</li>
    
@endforeach
</ul>
    
@endif
 
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
    
@endif