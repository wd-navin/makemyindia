@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="box">
            <h2>ADD USERS</h2>    
            <form action="javascript:void(0)" enctype="multipart/form-data" method="POST" class="SubmitForm"> 
                @csrf
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <table>
                    <div class="inputBox">
                        <input type="hidden" name="user_id" placeholder="user_id" value="{{Auth::id()}}"/>
                     </div>
                    
                     <div class="inputBox">
                         <select name="category_id">
                             @foreach($cat as $data)
                             <option value="{{$data->id}}">{{ $data->name }}</option> 
                             @endforeach    
                         </select>
                     </div>
                        <div class="inputBox">
                        <input type="text" name="city" placeholder="city" />
                    </div> 
                    <div class="inputBox">
                        <input type="text" name="state" placeholder="state" />
                    </div> 
                   <div class="inputBox">
                       <input type="text" name="pick_up_location" placeholder="pick_up_location" />
                   </div> 
                     <div class="inputBox">
                       <input type="textarea" name="message" placeholder="message" />
                   </div> 
                      <div class="inputBox">
                       <input type="file" name="image[]" multiple />
                   </div> 
                       
                    <button type="submit" name="" class="btn btn-primary btn-sm">Submit</button>
                  </table>     
          
            </form> 
            </div>
        
    </div>
</div>
@endsection