<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <div class="container-fluid vh-100">
            <div class="row h-100">
                <h1>Benvenuto</h1>
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.upwork.com%2Fen-gb%2Fservices%2Fproduct%2Fdevelopment-it-food-delivery-mobile-app-1689591786342387712&psig=AOvVaw2oOnIvcaEEbuAkNI_LoFdS&ust=1709301074956000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCNiZi-3Y0IQDFQAAAAAdAAAAABAE"
                    alt="">
                <p>Per accedere ai nostri servici deve registrare il tuo ristorante</p>
                <h5>Completa la registrazione qui <i class="fas fa-arrow-down"></i></i>

            
                </h5>
                <ul class="nav flex-column">

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-sign-out-alt fa-lg fa-fw" style="color: black">Logout</i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">
                        <i class="fa-solid fa-home-alt fa-lg fa-fw" style="color: black">Home</i> 
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

                </ul>


                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>

</html>
