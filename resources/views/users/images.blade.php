@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="box">
            <h2>ADD USERS</h2>    
            <form action="javascript:void(0)"  method="POST" enctype="multipart/form-data" class="UploadImage"> 
                @csrf
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                      
                   <div class="inputBox">
                       <input type="file" name="image[]" multiple="" />                       
                   </div>                                            
                   <div class="inputBox">
                       <input type="text" name="user_id" value="{{ Auth::id() }}" readonly="" />                       
                   </div>                                            
                       
                          <input type="submit" name="" value="Submit">
                   
          
            </form> 
            </div>
        
    </div>
</div>


@endsection