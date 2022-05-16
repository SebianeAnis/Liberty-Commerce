<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/catalogue', function() {
    return view('catalogue');
});

Route::get('/panier', function() {
    return view('panier');
});

Route::get('/acheté', function() {
    return view('acheté');
});

Route::get('/admin', function() {
    return view('admin');
});

Route::get('/profil', function() {
    return view('profil');
});


Route::get('/pageproduit', function() {
    return view('pageproduit');
});

Route::post('/admin', function() {
    $produit = new App\Models\produit;
    $produit->titre = request('titre');
    $produit->image = request('photo');
    $produit->description = request('description');
    $produit->stock = request('stock');
    $produit->categorie = request('categorie');
    $produit->prix = request('prix');

$produit->save();
    return view('nvproduit');
});


Route::get('/nvproduit', function() {
    return view('nvproduit');
});


Route::get('/catalogue',[ProduitController::class,'index2']);


Route::get('/pageproduit/{id}',[ProduitController::class,'index3']);





