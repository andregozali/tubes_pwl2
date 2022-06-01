@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="img/home-picture.png" width="750" alt="" class="my-5">
            </div>
            <div class="col align-self-center">
                
                <h2 style="font-family: 'Bitter', serif;">Welcome to e-Blog!</h2>
                <p>Make your own post with e-Blog!</p>
                @auth   
                <a class="btn btn-primary" href="dashboard">Let's Get Started</a>
                @else
                <a class="btn btn-primary" href="login">Let's Get Started</a>
                @endauth
            </div>
        </div>

    </div>


@endsection
        
    