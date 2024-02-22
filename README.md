<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/template-tested-green" alt="Build Status">
<img src="https://img.shields.io/badge/license-boolean_95-blue" alt="Licensed to Boolean Students" />
<img src="https://img.shields.io/badge/laravel-9.19-red" alt="Laravel 9.19" />
<img src="https://img.shields.io/badge/laravel_breeze-1.19.2-red" alt="Laravel Breeze 1.19.2" />
<img src="https://img.shields.io/badge/bootstrap-5.22-red" alt="Bootstrap 5.22" />
<img src="https://img.shields.io/badge/vite-3.00-red" alt="Vite 3.00" />
</p>

# INFO

Questo git-template fornisce lo scaffold di una web application realizzata con Laravel 9, Blade e Bootstrap e fornita di Breeze per la gestione dell'autenticazione. 

- [Documentazione Laravel 9.x](https://laravel.com/docs/9.x).
- [Documentazione Laravel Breeze](https://laravel.com/docs/10.x/starter-kits).

# SETUP INIZIALE

- Creare un repository a partire da questo template
- Clonare il repository appena creato sul proprio PC
- Creare un database
- Creare un file `.env`. Si può procedere copiandolo da `.env.example` e rinominandolo
- Per creare la APP_KEY nel `.env`, lanciare il comando dedicato, ma prima installare le dipendenze composer
	```bash
    composer install
	php artisan key:generate
	```
- Controllare che tutti i dati nel `.env` siano corretti (attenzione al database)
- Lanciare migration e seeder iniziali (per la gestione degli utenti ecc..)
	```bash
	php artisan migrate:fresh --seed
	```
- Lanciare il progetto tramite il server built-in
	```bash
	php artisan serve
	```
- Installare le dipendenze NPM e lanciare il progetto
	```bash
	npm i
	npm run dev
	```
- Puntare il browser all'indirizzo mostrato in terminale per controllare che tutto funzioni.

# REFACTORING DASHBOARD - LAYOUTS E VIEWS

- Oltre alla rotta di base avremo una rotta `/dashboard` la cui View si trova sotto [`/resources/views/dashboard.blade.php`](/resources/views/dashboard.blade.php)
- Creiamo un file `layouts/admin.blade.php`, che sarà il layout da utilizzare per la dashboard e tutte le pagine del back-office
	<details>
	<summary>Clicca per mostrare il codice</summary>

	```php
	<!doctype html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Fontawesome 6 cdn -->
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

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
					<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
						<div class="position-sticky pt-3">
							<ul class="nav flex-column">

								<li class="nav-item">
									<a class="nav-link text-white" href="/">
										<i class="fa-solid fa-home-alt fa-lg fa-fw"></i> Home
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}" href="{{route('admin.dashboard')}}">
										<i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										<i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>

							</ul>

						</div>
					</nav>

					<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
						@yield('content')
					</main>
				</div>
			</div>

		</div>
	</body>

	</html>
	```
	</details>

	
- Modifichiamo [`la View della dashboard`](/resources/views/dashboard.blade.php) per utilizzare il layout appena creato
	<details>
	<summary>Clicca per mostrare il codice</summary>
	
	```php
	@extends('layouts.admin')

	@section('content')
	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Dashboard') }}</div>

					<div class="card-body">
						@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
						@endif

						{{ __('You are logged in!') }}
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
	```
	</details>

 - Attenzione!! A questo punto avrete degli errori se non completate prima la parte successiva "ROUTES E CONTROLLER", non vi spaventate, è normale

# REFACTORING DASHBOARD - ROUTES E CONTROLLER

- Creare un controller `Admin/DashboardController` 
	```bash
	php artisan make:controller Admin/DashboardController
	```
- Restituire la View della Dashboard dal metodo index del DashboardController
	```php
	public function index() {
		return view('admin.dashboard');
	}
	```
- Riorganizzare le cartella delle Views per il backoffice:

	Creare una cartella `/resources/views/admin`

	Spostare la View della dashboard da `/resources/views/dashboard.blade.php` alla cartella admin apppena creata

- Modificare il file delle Routes `web.php` come segue:
	<details>
	<summary>Clicca per mostrare il codice</summary>

	```php
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!
	
	/* ... */

	Route::get('/', function () {
		return view('welcome');
	});

	Route::middleware(['auth'])
		->prefix('admin') //definisce il prefisso "admin/" per le rotte di questo gruppo
		->name('admin.') //definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
		->group(function () {
		
			//Siamo nel gruppo quindi:
			// - il percorso "/" diventa "admin/"
			// - il nome della rotta ->name("dashboard") diventa ->name("admin.dashboard")
			Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

	});

	require __DIR__.'/auth.php';
	```
	</details>

- Modificare il valore della costante HOME nel file `app/Provider/RouteServiceProvider.php`
	```php
	public const HOME = '/admin';
	```
	In questo modo, dopo l’autenticazione, l’utente verrà reindirizzato alla dashboard, che risponde alla rotta `/admin`

- Modificare il link alla dashboard dal menu del layout di base qui: resources/views/layouts/app.blade.php:70
	```php
    <a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a>
	```
     modificare in:
	```php
    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{__('Dashboard')}}</a>
	```

# RISORSE: MODEL, CONTROLLER, MIGRATION, SEEDER

Si possono creare tutti insieme con:

```bash
php artisan make:model NomeModello -rmsR
```

-r o --resource indica se creare un controller di tipo Resource Controller
<br>
-c o --controller crea un normale Controller (se non usato insieme a -r)
<br>
-m o --migration crea la Migration per il modello
<br>
-s o --seed crea il Seeder per il modello
<br>
-R o --requests crea le FormRequest e le usa nel Resource Controller
<br>

Qui trovate la lista dei parametri accettati da [`make:model`](https://artisan.page/#makemodel)

A questo punto potete andare a definire il comportamento di migration e seeder nei relativi file.

Infine lanciate entrambi usando il comando:
```bash
php artisan migrate:fresh --seed
```

# CRUD

Spostare il Resource Controller appena creato da `App\Http\Controllers` a una nuova cartella `App\Http\Controllers\Admin` 

Nel controller correggere il namespace ed importare il Controller generico
```php
<?php
namespace App\Http\Controllers\Admin; // era "App\Http\Controllers"
use App\Http\Controllers\Controller; // Controller di base da importare
//...ecc
```

Procedere come in passato, ma inserendo le rotte del Resource Controller all'interno del blocco protetto da autenticazione:

```php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController; // <---- Importare il controller da usare!!

// ...

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
	
	// Admin Post CRUD
	Route::resource('posts', PostController::class);
});
```

A questo punto dal nostro Resource Controller possiamo popolare i vari metodi (index, create ecc..) restituendo le relative viste o validando/lavorando i dati come sempre.

L'unica differenza sarà il percorso in cui salvare le viste. Se prima si creava sotto "views" una cartella "nomeRisorsa" con tutte le viste:
```bash
/resources/views/posts/*.blade.php
```
Adesso invece quella cartella andrà creata sotto "views/admin"
```bash
/resources/views/admin/posts/*.blade.php
```
