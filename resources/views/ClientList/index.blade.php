
@extends('layouts.admin')


@section('title')

Client List

@endsection()
@section('name')
<h1>Client List</h1>

@endsection()


@section('body')
<br>
<br>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address </th>
      <th scope="col">  Action </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($client2 as $c)

      
      <td>{{$c->name}}</td>
      <td>{{$c->email}}</td>
      <td>{{$c->number}}</td>
      <td>{{$c->address}}</td>
      <td><a href="{{route('edit',['id'=>$c->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection()


@section('scripts')



@endsection()
 
