@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-5 broder-bottom pb-4">
            <h2><a href="/posts/{{$post->slug}}"class="text-decoration-none">{{ $post->title }}</a></h2>
            <h5>By: <a href="#"class="text-decoration-none">{{ $post->user->name}}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt}}</p>
            {{-- <h2><a href="/posts/{{$post["id"]}}">{{ $post["title"] }}</a></h2>
            <h5>By: {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p> --}}
            <a href="/posts/{{ $post->slug }}"class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection