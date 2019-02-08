@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Id</th>
      <th scope="col">City</th>
      <th scope="col">category_id</th>
      <th scope="col">State</th>
      <th scope="col">Pick_up_location</th>
      <th scope="col">Message</th>
      <th scope="col">images</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 
  @foreach($donation as $data)
    <tr>
     <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->user_id }}</td>
      <td>{{ $data->city }}</td>
       <td>@if($data->category != '')
           {{ $data->category->name }}
           
           @endif
       </td>
     
      <td>{{ $data->state }}</td>
      <td>{{ $data->pick_up_location }}</td>
      
      <td>{{ $data->message }}</td>
      <td>
          @foreach($data->donationimage as $img)
          <img src="{{asset($img->image)}}" width="50">
          @endforeach
      </td>
       <td>
          <a href='dlt/{{ $data->id }}' class="btn btn-info text-white btn-sm">Delete</a>
          <a href='edit/{{ $data->id }}' class="btn btn-info text-white btn-sm">Edit</a>
      </td>
    </tr>
    
    @endforeach
    {{ $donation->links() }}
  </tbody>
</table>
    </div>
</div>
@endsection