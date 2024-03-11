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
            <div id="adminLogo" class="row justify-content-start">
                <img src="{{url('/images/back-logo.png')}}" alt="" id="adminImg" class="m-4">
            </div> 
            
            <div class="row h-100 px-0">
                <nav id="sidebarMenu" class="col-md-3 colLg17 d-md-block navbar-dark sidebar collapse px-0">
                    <div class="position-sticky">
                        <img url="\public\images\png-logo.png" alt="">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link fw-semibold text-black fs-5 pb-3" href="/">
                                    <i class="fa-solid fa-home-alt fa-xl fa-fw"></i> Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link fw-semibold text-black fs-5 py-3 {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-green' : '' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-xl fa-fw"></i> Dashboard
                                </a>
                            </li>
                            {{-- @if (isset($products)) --}}
                            <li class="nav-item">
                                <a class="nav-link fw-semibold text-black fs-5 py-3 {{ Route::currentRouteName() == 'admin.products.index' ? 'bg-green' : '' }}"
                                    href="{{ route('admin.products.index') }}">
                                    <i class="fa-solid fa-burger fa-xl fa-fw"></i> Menu
                                </a>
                            </li>
                            @if (isset($restaurant->id))
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold text-black fs-5 py-3 {{ Route::currentRouteName() == 'admin.products.create' ? 'bg-green' : '' }}"
                                        href="{{ route('admin.products.create') }}">
                                        <i class="fa-solid fa-square-plus fa-xl fa-fw"></i> Nuovo Prodotto
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold text-black fs-5 py-3 {{ Route::currentRouteName() == 'admin.orders.index' ? 'bg-green' : '' }}"
                                        href="{{ route('admin.orders.index') }}">
                                        <i class="fa-solid fa-list fa-xl fa-fw"></i> Ordini
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold text-black fs-5 py-3 {{ Route::currentRouteName() == 'admin.restaurants.create' ? 'bg-green' : '' }}"
                                        href="{{ route('admin.restaurants.create') }}">
                                        <i class="fa-solid fa-square-plus fa-xl fa-fw"></i> Aggiungi Ristorante
                                    </a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link fw-semibold text-black fs-5 py-3" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-sign-out-alt fa-xl fa-fw"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>

                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 overflow-y-auto">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>

</html>
