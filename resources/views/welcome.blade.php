<h1>Home: first page</h1>

{{ 5+ 5}}

<br> <br>

{{" Hello World!" }}

<br> <br>


{{" <h1> Hello World! </h1> " }} {{-- very secure way but it print as it is--}} {{-- comment alt+shit+a to comment all n ctrl+//--}}

<br> <br>
{!! " <h1> Hello World! </h1> " !!}

<br> <br>
{{-- {!! "<script> alert('Hello World!') </script> " !!} --}}

{{-- comment statment --}}

@php
    $user = "Anil Tamang"; 
@endphp

{{ $user }}

<br>

{{-- using arrar eg --}}
@php
    $names = ["Salman Khan", "John Cena", "Shail kapoor"];
    $user2 = "Anil Tamang"; 
@endphp

<ul>
@foreach ( $names as $n)
    <li>{{ $n }}</li>
@endforeach
</ul>
@{{ $user2 }}

<br>
@@if()

<br>
<br>
{{" using loop index + foreach loop + array" }}
@php
    $names = ["Salman Khan", "John Cena", "Shail kapoor","Salman Khan", "John Cena", "Shail kapoor"];
    $user2 = "Anil Tamang"; 
@endphp

<ul>
@foreach ( $names as $n)
    {{-- <li>{{ $loop->index}} - {{$n}}</li> --}}
    {{-- <li>{{ $loop->iteration}} - {{$n}}</li> --}}
    {{-- <li>{{ $loop->count}} - {{$n}}</li> --}}

    @if ($loop->first)
    <li style="color: red;">{{$n}}</li>
    @elseif ($loop->last)
    <li style="color: green">{{$n}}</li>
    @else
    <li>{{$n}}</li>
    @endif
    
@endforeach
</ul>

<br><br>
{{ "even or odd eg" }}
<ul>
    @foreach ( $names as $n)
        {{-- <li>{{ $loop->index}} - {{$n}}</li> --}}
        {{-- <li>{{ $loop->iteration}} - {{$n}}</li> --}}
        {{-- <li>{{ $loop->count}} - {{$n}}</li> --}}
    
        @if ($loop->even)
        <li style="color: red;">{{$n}}</li>
        @elseif ($loop->odd)
        <li style="color: green">{{$n}}</li>
        @endif
        
    @endforeach
    </ul>
    


{{-- time stamp: 19:25 how to use laravel balde snippet extension usefulway --}}
{{-- <a href="{{route('mypost') }}">Post Page </a>
<a href="{{route('myabout') }}">About Page </a> --}}