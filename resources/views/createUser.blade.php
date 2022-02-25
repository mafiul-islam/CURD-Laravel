@extends('layout')
@section('content')
<h1>Create User... </h1>
<form action='createsubmit' method='POST'>
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="name">
  </div>
    
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection