@extends('layouts.app')
@section('content')
    <div class="jumbotron rounded-3 vh-100">
        <div class="container">
            <h1 class="display-5 textOrange fw-bold pt-5">
                Benvenuto in
            </h1>
            <div class="logo_laravel">
                <img class="w-75" src="{{url('/images/nobglogo.png')}}" alt="">
            </div>
            <h1 id="welcomeTxt" class="fw-bold">
                Admin
            </h1>
            <div>
                <a href="http://127.0.0.1:8000/login" class="btn welcomeBtn text-white bg-green fw-bold mt-2">Accedi alla tua area riservata</a>
                <a href="http://127.0.0.1:8000/register" class="btn welcomeBtn text-white bg-green fw-bold mt-2">Registra un nuovo utente</a>    
            </div>
        </div>
    </div>
@endsection
