@extends('layout.main')

@section('container')

<div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
    <h1 class="mb-2">{{ $post->title }}</h1>
    <h3>By: <a href="/blog?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> 
        in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h3>

            @if ($post->image)
            
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            
            @else
            
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                
            @endif

        <article class="my-3 fs-6">
            {!! $post->body !!}
        </article>

    

    <a href="/blog" class="d-block mt-3">Back to post</a>
            </div>
        </div>
</div>


@endsection