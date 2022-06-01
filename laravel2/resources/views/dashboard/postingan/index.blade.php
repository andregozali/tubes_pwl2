@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Semua Post</h1>
  </div>

  @if (session()->has('success'))
            <div class="alert alert-success " role="alert">
                {{ session('success') }}
            </div>
        @endif

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Isi</th>
          <th scope="col">Author</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->body }}</td>
          <td>{{ $post->author->name }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-success m-1">
                <span data-feather="eye"></span>
              </a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning m-1">
                <span data-feather="edit"></span>
              </a>

              <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline m-1">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin menghapus post ini ?')">
                <span data-feather="x"></span>

              </button>
              </form>
               

          </td>
        </tr>  
        @endforeach
        
      </tbody>
    </table>
  </div>

@endsection