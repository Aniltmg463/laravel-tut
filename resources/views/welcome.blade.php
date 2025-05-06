{{-- <h1>HomePage</h1> --}}



{{-- @php
    $fruits = ['apple', 'banana', 'orange'];
    
@endphp

@include('pages.header',['name' => 'Spriment']) --}}

{{-- @php
    $fruits = ['apple', 'banana', 'orange'];
    
@endphp --}}

{{-- @php
    $fruits = ["one"=>"apple", "two"=>"banana", "three"=>'orange'];
    
@endphp --}}

{{-- @php
    $fruits = [];
    
@endphp


@include('pages.header',['names' => $fruits])

@include('pages.footer')

@includeIf('pages.content') //check id there is content page  --}}

{{-- including subviews with conditional check --}}
{{-- @php
    $fruits = ["one"=>"apple", "two"=>"banana", "three"=>'orange'];
    $boolean =true;
@endphp
@includeWhen($boolean,'pages.header',['names' => $fruits])

@include('pages.footer')

@includeIf('pages.content') --}}

{{-- @php
    $fruits = ["one"=>"apple", "two"=>"banana", "three"=>'orange'];
    $value ="";
@endphp
@includeWhen(empty($value),'pages.header',['names' => $fruits])

@include('pages.footer')

@includeIf('pages.content') --}}

{{-- @php
    $fruits = ["one"=>"apple", "two"=>"banana", "three"=>'orange'];
    $value ="";
@endphp
@includeUnless(empty($value),'pages.header',['names' => $fruits]) --}}



{{-- @include('pages.welcome2') --}}
{{-- 
@includeIf('pages.content')

@include('pages.footer') --}}