
<x-layout title="{{ $post->title }}">
    <artucle>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            {!! $post->body !!}
        </p>
    </artucle>
    <a href="/">Go back</a>
</x-layout>
