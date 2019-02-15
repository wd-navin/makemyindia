@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row my-5">
<table class="table table-borderless bg-white">
    <thead class="bg-danger text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Phone</th>
      <th scope="col">Fax</th>
      <th scope="col">Email</th>
      <th scope="col">image</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>     
      <th scope="col">
          <a href="{{ route('add-record') }}" class="btn btn-sm btn-info">
              {{ __('ADD') }}
          </a>
      </th>     
    </tr>
  </thead>
  <tbody>
      @foreach($users as $data)
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->name }}</td>
      <td>{{ $data->username }}</td>
      <td>{{ $data->phone }}</td>
      <td>{{ $data->fax }}</td>
      <td>{{ $data->email }}</td>
      <td>
         @if($data->userimage != '')
          <img src="{{asset($data->userimage['image'])}}" width="50">
          @else
           <img src="{{asset('/images/child-girl-kid-12165.jpg')}}" width="50">
          @endif
         
      </td>
      <td>{{ $data->password }}</td>
      <td>
          <a id = "{{ $data->id }} " class="btn btn-info text-white btn-sm deleteData">Delete</a>
          <a href="{{  route('edit-users',$data->id) }} "class="btn btn-info text-white btn-sm">Edit</a>
      </td>
    </tr>
  @endforeach
  {{ $users->links() }}
  </tbody>
</table>
</div>
    </div>
@endsection