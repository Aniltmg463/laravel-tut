

@extends('layout')

@section('title')
Add New User
@endsection

@section('content')

<form action="{{ route('post.store') }}" method="POST">
    @csrf 
    <div class="mb-3">
        <label for="username" class="form-control">User Name</label>
        <input type="text" class="form-control" name="username">
    </div>

     <div class="mb-3">
        <label for="useremail" class="form-control">User Email</label>
        <input type="text" class="form-control" name="useremail">
    </div>

    <div class="mb-3">
        <label for="userAge" class="form-control">User Age</label>
        <input type="number" class="form-control" name="userage">
    </div>

     <div class="mb-3">
        <label for="usercity" class="form-control">User City</label>
        <input type="text" class="form-control" name="usercity">
    </div>

     <div class="mb-3">
        <input type="submit" value="save" class="btn btn-success">
    </div>

</form>

@endsection
