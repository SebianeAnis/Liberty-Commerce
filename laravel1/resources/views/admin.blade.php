@extends('layouts.default')
@section('contenu')


<div class="page"> 
            
            
            <div class="titre">
                
                <h1> Ajouter un produit :</h1>
                
            </div>
            
            <div class= "nvproduit">     
                
                <form action="\admin" method="post">
                    @csrf

                    <label for="titre">Titre du produit :</label> <br><br>
                    <input class= "champstitre" type="text" name="titre" placeholder="Titre">
                    <br><br>

                    <label for="description">Déscription du produit :</label> <br><br>
                    <input class= "champsdescription" type="text" name="description" placeholder="Decrivez le produit">
                    <br><br>

                    <label for="image1">Photo du produit :</label> <br><br>

                    <input class= "champs" type="file" name="photo" placeholder="Photo du produit"><br><br>


                    <label for="catégorie">Stock Disponible :</label> <br><br>
                    <input class= "champscategorie" type="number" name="stock" placeholder="Stock">
                    <br><br>

                    <label for="description">Catégorie :</label> <br><br>
                    <input class= "champsdescription" type="text" name="categorie" placeholder="Categorie du produit">
                    <br><br>

                    <label for="catégorie">Prix :</label> <br><br>
                    <input class= "champscategorie" type="number" name="prix" placeholder="Prix">
                    <br><br>

                    <input class="boutonpageadmin" type="submit" value="Ajouter le produit !">

                </form>

               
                    
               
                
            </div>
            
            
        </div>

@endsection