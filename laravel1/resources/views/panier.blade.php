@extends('layouts.default')

@section('contenu')

<div class="page"> 


<div class="titrepanier">

<h1> Votre panier :</h1>

</div>

<div class="panier">

<div class="tableau">

<table>
<tr>
<th>Produit</th>
<th>Quantité</th>
<th>Prix</th>
<th> </th>
</tr>

<tr>
<td>Parka Parajumpers</td>
<td>1</td>
<td>850,00 €</td>
<td></td>
</tr>

<tr>
<td></td>
<td>Total :</td>
<td>850,00 €</td>
<td> 
<div id="panier_contenu"> </div>

<div class="boutonachat">    

<a href="acheté">
<input class="boutonpanier" type="submit" value="Acheter">
</a>

</div>

</td>
</tr>

</table>

</div>


</div>





</div>

@endsection