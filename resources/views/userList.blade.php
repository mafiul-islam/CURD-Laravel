@extends('layout')
@section('content')
<h1> This is User List </h1>

<table id="showBooksIn" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            @foreach($user as $u)
            <tr>
                <td>{{$u['id']}}</td>
                <td>{{$u['name']}}</td>
                <td>{{$u['email']}}</td>
            </tr>
            @endforeach
        </table>
@endsection