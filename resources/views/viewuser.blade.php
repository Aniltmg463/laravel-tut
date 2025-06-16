

@extends('layout')

@section('title')
 User Deatails
@endsection

@section('content')

<table class="table table-striped table-bordered">
    <tr>
        <th width="80px"> Name : </th>
        <td>{{ $posts->name }}</td>
    </tr>
    <tr>
        <th>Email: </th>
        <td>{{ $posts->email }}</td>
    </tr>
    <tr>
        <th>Age: </th>
        <td>{{ $posts->age }}</td>
    </tr>
     <tr>
        <th>City: </th>
        <td>{{ $posts->city }}</td>
    </tr>
</table>
<a href="{{ route('post.index') }}" class="btn btn-danger">Back</a>

@endsection
