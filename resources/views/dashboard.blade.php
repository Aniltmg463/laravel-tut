@extends('layout/layout')
@section('header')
    This is header section
@endsection


@section('content')
    <div class="auth-section">
        <form method='post' action="{{ route('logout') }}">
            @csrf
            <button type='submit' class="logout-button">Logout</button>
        </form>
    </div>

    <br>
    <br>
    <br>

    <h1>Welcome to Admin Dashboard</h1>

    {{-- @php
    $decrypted = Crypt::decrypt($user->password);
return view('show', compact('decrypted'));

@endphp --}}
@endsection


@section('footer')
    THis is Footer Section
@endsection
