<x-layout title="My Blog">

    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/post/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p>
                {{ $post->excerpt }}
            </p>
        </article>
    @endforeach

</x-layout>
