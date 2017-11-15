@extends('layouts.app')
@section('title')

        Welcome

@endsection
@section('content')
    @guest
    @else
    <div class="title m-b-md">
        {{Auth::user()->name}}
    </div>
    <div class="sections">
        @foreach( Auth::user()->sections as $section)
               {{ Auth::user()->name}}
               {{ $section->subject->name}}
               Seccion
               {{ $section->NSection}} 
            <br>
        @endforeach
    </div>
    @endguest
   
@endsection