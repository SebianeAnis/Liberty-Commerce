@extends('layouts.default')
@section('contenu')


<div class="page">
   <h1> NISDIS Goose</h1>

<div class="links">
<a href="https://laravel.com/docs">Documentation</a>
<a href="https://laracasts.com">Laracasts</a>
<a href="https://laravel-news.com">News</a>
<a href="https://forge.laravel.com">Forge</a>
<a href="https://github.com/laravel/laravel">GitHub</a>
</div>
</div>

@auth
<div class="boutondashboard">
<a href="http://127.0.0.1:8000/dashboard" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
</div>
@endauth


@guest
    
    <div class="boutondashboard">
    <a class="boutondashboardd" href="http://127.0.0.1:8000/login" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
    <a class="boutondashboardd" href="http://127.0.0.1:8000/register" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline ">Register</a>
    </div>

@endguest

@endsection