@extends('layouts.default')
@section('contenu')

<div class="page"> 




<div class="pacheté">
<p>
Merci pour votre achat {{Auth::user()->name}}, un mail de confirmation vous a été envoyé à {{Auth::user()->email}}.
</br>
</br>
A bientôt !
</p>
</div> 


<div class="boutonsacheté">
<a href="http://127.0.0.1:8000/dashboard" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>


<a href="http://127.0.0.1:8000/catalogue" class="text-sm text-gray-700 dark:text-gray-500 underline">Je retourne Shopper</a>

</div>

</div>



@endsection