@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="box">
            <h2>EDIT USERS</h2>    
            <form action="{{  route('edit-users',$data->id) }} " method="post">
                
                @csrf
           
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">   
                    <div class="inputBox">
                        <input type="hidden" name="id" value="{{ $data->id }}"   placeholder="Id" />
                     </div>
                    <div class="inputBox">
                        <input type="text" name="name" value="{{ $data->name }}"  placeholder="name" />
                     </div>
                    <div class="inputBox">
                        <input type="text" name="username" value="{{ $data->username }}" placeholder="username" />
                   </div>
                  <div class="inputBox">
                        <input type="text" name="email" value="{{ $data->email }}" placeholder="email" />
                   </div>
                   
                  
                   <div class="inputBox">
                       <input type="text" name="phone" value="{{ $data->phone }}" placeholder="phone" />
                   </div> 
                   <div class="inputBox">
                       <input type="text" name="fax" value="{{ $data->fax }}" placeholder="fax" />
                   </div> 
                     <div class="inputBox">
                         <input type="textarea" name="password" value="{{ $data->password }}" placeholder="password" />
                   </div> 
                       
                          <input type="submit" name="" value="Submit">                
               
          </form>
            </div>
        
    </div>
</div>
@endsection