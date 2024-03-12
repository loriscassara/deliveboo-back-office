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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div id="app">

        <div class="container-fluid vh-100">
            <div id="adminLogo" class="row">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <img src="{{url('/images/back-logo.png')}}" alt="" id="adminImg" class="m-3">
                    </div>
    
                    {{-- mobile nav --}}
                    <div class="dropdown">
                        <button class="btn btn-sm text-white d-md-none d-lg-none bg-green py-1 px-2 my-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-sharp fa-solid fa-bars"></i>
                        </button>
    
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://localhost:5173/"></a>Home</li>
                            <li><a class="dropdown-item {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-green' : '' }}"
                                href="{{ route('admin.dashboard') }}"></a>Dashboard</li>
                            <li><a class="dropdown-item {{ Route::currentRouteName() == 'admin.products.index' ? 'bg-green' : '' }}"
                                href="{{ route('admin.products.index') }}"></a>Menù</li>
                            <li><a class="dropdown-item {{ Route::currentRouteName() == 'admin.products.create' ? 'bg-green' : '' }}"
                                href="{{ route('admin.products.create') }}"></a>Nuovo Prodotto</li>
                            <li><a class="dropdown-item {{ Route::currentRouteName() == 'admin.orders.index' ? 'bg-green' : '' }}"
                                href="{{ route('admin.orders.index') }}"></a>Ordini</li>
                            <li><a class="dropdown-item {{ Route::currentRouteName() == 'admin.restaurants.create' ? 'bg-green' : '' }}"
                                href="{{ route('admin.restaurants.create') }}"></a>Aggiungi Ristorante</li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> 
            
            <div class="row h-100 px-0">
                <nav id="sidebarMenu" class="col-md-2 d-md-block sidebar collapse px-0">
                    <div class="position-sticky">
                        <img url="\public\images\png-logo.png" alt="">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link fw-semibold text-black fs-5 pb-3" href="http://localhost:5173/">
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
                                    <i class="fa-solid fa-burger fa-xl fa-fw"></i> Menù
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
                                <li class="nav-item">
                                    <a class="nav-link text-black fs-4 py-2" href="/statistiche">
                                        <i class="fas fa-chart-bar"></i> Statistiche
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
