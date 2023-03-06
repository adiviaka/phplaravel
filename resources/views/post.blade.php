@extends('layouts.main')

@section('container') 

        <article class="mb-5">
        <h1 class="mb-5">{{ $post->title }}</h1>
        
        <p>By: <a href="#"class="text-decoration-none">{{ $post->user->name}}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>
        {{-- <p>{{ $post->excerpt}}</p> --}}
        {!! $post->body!!}
        
        {{-- <h2>{{ $post["title"] }}</h2>
            <h5>By: {{ $post["author"] }}</h5>
            {!! $post->body!!}
            <p>{{ $post["body"] }}</p> --}}
        </article>

    <a href="/blog" class="d-block mt-3 mb-3"> Back to Posts</a>

@endsection