@extends('layouts.app')
@section('title')

        Welcome

@endsection
@section('content')
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        @foreach( $links as $link => $text)
            <a href="{{ $link }}">{{ $text }}</a>
        @endforeach
    </div> 
@endsection