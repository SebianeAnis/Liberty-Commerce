<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProduitController;
use App\Models\produit;

class ProduitController extends Controller
{
    
public function index2(){
$produits=Produit::all();
return view('/catalogue',['produits' => $produits]);
}

public function index3(Request $request){
    $produit=Produit::find($request->id);
    return view('pageproduit',compact('produit'));
    
    
    }


}

