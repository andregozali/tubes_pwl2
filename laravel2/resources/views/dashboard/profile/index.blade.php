@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Profile</h1>  
</div>

    @if (session()->has('success'))
    <div class="alert alert-success " role="alert">
        {{ session('success') }}
    </div>
    @endif 

<div class="col-lg-8">
    <a href="/dashboard/profile/{{ auth()->user()->name }}/edit" class="btn btn-primary mb-3"><span data-feather="refresh-ccw"></span> Edit Profile</a>
    <form method="POST" action="/dashboard/profile" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required readonly>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" value="{{ auth()->user()->username }}" required readonly>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" required readonly>
        </div>
    </form>
</div>

@endsection