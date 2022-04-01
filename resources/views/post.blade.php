
@extends('layout')
@section('content')
    <artucle>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            {!! $post->body !!}
        </p>
    </artucle>
    <a href="/">Go back</a>
@endsection
