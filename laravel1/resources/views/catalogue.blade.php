@extends('layouts.default')
@section('contenu')
<a href="panier" id="panier_logo"> panier </a>
<div class="pagecatalogue"> 


            @foreach($produits as $produit)
            
            <div class="child">  
                
                <div class="photoarticle">
                    
                <img src="{{ asset('/img/'.$produit->image)}}" alt="Card image cap"> </img>
                    
                </div>
                
                <div class="nomprixarticle">
                    
                    
                    <div class="nomarticle">
                        
                        <p>{{ $produit->titre }}</p>
                        
                    </div>
                    
                    <div class="prixarticle">
                        
                        <p>Prix : {{ $produit->prix }}€</p>
                        <p>Stock : x{{ $produit->stock }}</p>
                        
                    </div>
                    
                    
                </div>
                
                <div class="boutonsarticle">
                    
                    <div class="achatdirect">

                        
                            <button  onclick=" acheter({{ $produit->id }})" class="btn btn-primary" type="button" > acheter</button>
                        
                    </div>
                    
                    <div class="infoarticle">
                        
                    <a href="pageproduit/{{$produit->id}}" >
                            <input class="bouton" type="submit"  value="Infos">
                    </a>
                        
                    </div>
                    
                </div>
                
            </div>
@endforeach

        
    </div>
    
 <script src="{{ asset('js/panier.js') }}"> </script>
    @endsection