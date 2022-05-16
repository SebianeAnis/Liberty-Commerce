@extends('layouts.default')
@section('contenu')

<div class="pagepageprofil">



<div class="titrepageprofil">

<h1 class="titreprofil"> PROFIL </h1>

</div>


<div class="descriptionpageprofil">


<div class="boutondashboard">
<a href="http://127.0.0.1:8000/dashboard" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
</div>

<br>
<br>

    <div> NOM:                              {!! Auth::user()->name !!}</div> 
    <br>
    <div> MAIL:                             {!! Auth::user()->email !!}</div> 
    <br>
    <div> CREATION DU COMPTE :              {!! Auth::user()->created_at !!}</div>

</div>


</div>


@endsection