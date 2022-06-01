@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row  my-3">
        <div class="col-lg-8">
<h1 class="mb-2">{{ $post->title }}</h1>

@if (auth()->user()->username == 'budigaming')

@else
<a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span> Kembali ke Postingan</a>
<a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>


<form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Anda yakin menghapus post ini ?')">
      <span data-feather="x"></span>
        Hapus
    </button>
    </form>
@endif


    @if ($post->image)
    
    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
    
    @else
    
    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
        
    @endif


    <article class="my-3 fs-6">
        {!! $post->body !!}
    </article>


        </div>
    </div>
</div>

@endsection