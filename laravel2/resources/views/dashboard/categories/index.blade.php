@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kategori Post</h1>
  </div>

  @if (session()->has('success'))
            <div class="alert alert-success " role="alert">
                {{ session('success') }}
            </div>
        @endif

  <div class="table-responsive">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Buat Kategori</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
              <a href="/blog?category={{ $category->slug }}" class="badge bg-success">
                <span data-feather="eye"></span>
              </a>
          </td>
        </tr>  
        @endforeach
        
      </tbody>
    </table>
  </div>

@endsection