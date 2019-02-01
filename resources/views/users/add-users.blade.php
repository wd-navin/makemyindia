@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="box">
            <h2>ADD USERS</h2>    
            <form action="{{route('users.add-users')}}" method="POST"> 
                @csrf
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <table>
                    <div class="inputBox">
                       <input type="text" name="name" placeholder="Name" />
                     </div>
                    <div class="inputBox">
                        <input type="text" name="username" placeholder="Username" />
                    </div> 
                    <div class="inputBox">
                        <input type="text" name="phone" placeholder="Phone" />
                    </div> 
                    <div class="inputBox">
                        <input type="text" name="fax" placeholder="Fax" />
                    </div> 
                   <div class="inputBox">
                       <input type="email" name="email" placeholder="Email" />
                   </div> 
                     <div class="inputBox">
                         <select name="status">
                             <option value="1">Active</option>
                             <option value="0">In-active</option>
                         </select>
                   </div> 
                   <div class="inputBox">
                       <input type="file" name="image[]"  />
                   </div>                           
                            <div class="inputBox">
                                <input type="text" name="password" placeholder="Password" />
                               </div>                            
                       
                          <input type="submit" name="" value="Submit">
                  </table>     
          
            </form> 
            </div>
        
    </div>
</div>
@endsection