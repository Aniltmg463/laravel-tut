

@extends('layout')

@section('title')
Update User
@endsection

@section('content')

<form action="{{ route('post.update',$posts->id) }}" method="POST">
    @csrf
    @method('PUT')

    {{-- <pre>
        @php
        print_r($errors->all());
        @endphp
    </pre> --}}

    <div class="mb-3">
        <label for="username" class="form-control">User Name</label>
        <input type="text" value={{ $posts->name }} class="form-control" name="username">
    </div>

     <div class="mb-3">
        <label for="useremail" class="form-control">User Email</label>
        <input type="text" value={{ $posts->email }} class="form-control" name="useremail">
    </div>

    <div class="mb-3">
        <label for="userAge" class="form-control">User Age</label>
        <input type="number" value={{ $posts->age }} class="form-control" name="userage">
    </div>

     <div class="mb-3">
        <label for="usercity" class="form-control">User City</label>
        <input type="text" value={{ $posts->city }} class="form-control" name="usercity">
    </div>

     <div class="mb-3">
        <input type="submit" value="save" class="btn btn-success">
    </div>

</form>

@endsection
