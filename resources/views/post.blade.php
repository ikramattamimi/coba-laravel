@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <p>By: <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
        <a href="/posts">Back</a>
    </article>
@endsection
