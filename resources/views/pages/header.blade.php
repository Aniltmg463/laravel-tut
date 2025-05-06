{{-- <h1>Header Page</h1> --}}

{{-- <p>{{ $names }}</p> --}}

{{-- @foreach ( $names as $n )
    <p>{{ $n }}</p>
@endforeach --}}

{{-- @foreach ( $names as $key => $value )
    <p>{{ $key }} - {{ $value }}</p>
@endforeach --}}

{{-- @forelse ($names as $key => $value)
<p>{{ $key }} - {{ $value }}</p>
    
@empty
    <p>no value found</p>
@endforelse --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yahoo</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Optional stylesheet -->
</head>
<body>
  <div id="wrapper">
    <header>
      <h1>Home Page</h1>
      <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/post">Post Services</a> |
        <a href="/contact">Contact</a>
      </nav>
    </header>
    <main>