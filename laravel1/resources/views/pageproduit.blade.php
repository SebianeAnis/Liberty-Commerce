@extends('layouts.default')
@section('contenu')

<div class="pagepageproduit"> 
            
            
            
            <div class="tout">
                
                
                <div class="cotegauche">
                    
                    
                    <div class="photospageproduit">
                        
                        
                        <div class="grandephoto">
                            
                        {{ $produit->image }}
                    </div>
                        
                        <div class="petitephoto">
                            
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                
                <div class="cotedroit">
                    
                    
                    <div class="descriptionall">
                        
                        <div class="haut">
                            
                            
                            <div class="nom"> 
                                <h1 class="nomm"> {{ $produit->titre }}</h1>
                                
                            </div>
                            
                            <div class="catégorie"> 
                                <p>Catégorie :</p>
                                <p>{{ $produit->categorie }}</p>
                            </div>
                            
                            <div class="description">
                            {{ $produit->description }}
                            </div>
                            
                        </div>
                        
                        
                        <div class="bas">
                            
                            <?php "{{Auth::produit()->prix}} --><!-- {{Auth::produit()->stock}}" ?> 
                           
                            <div class="stockprix"> 
                                
                                <div class="stock"> <p>Stock Disponible : {{ $produit->stock }}  </p> </div>
                                <div class="prix"><p>  {{ $produit->prix }} € </p></div>
                                
                            </div>
                            
                            <div class="achats">
                               
                                <div class="boutonpanier">  
                                    
                                <a href="http://127.0.0.1:8000/panier">
                                        <input class="boutonpageproduit" type="submit" value="Ajouter au panier">
                                    </a>
                                    
                                </div>
                                <div class="boutonachat">    
                                    
                                    <a href="http://127.0.0.1:8000/panier">
                                        <input class="boutonpageproduit" type="submit" value="Achat direct">
                                    </a>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        
                        
                    </div>
                    
                </div>
                
                
            </div>
            
        </div>
        




@endsection