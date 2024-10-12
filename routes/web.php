<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailCommande;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/pro', function () {
//     return view('admin.categorie');
// });
Route::group(['middleware' => ['checkUserGroup:admin']], function () {
   
            Route::get('/categorie', [CategorieController::class, 'accueil'])->name('categories');
            Route::post('/ajouter_categorie', [CategorieController::class, 'create'])->name('categorie.add');
            Route::post('/modifier_categorie/{id}', [CategorieController::class, 'edit'])->name('categorie.edit');
            Route::get('supprimer_categorie/{id}', [CategorieController::class, 'destroy'])->name('categorie.delete');

            //clients
            Route::get('/clients', [ClientController::class, 'index'])->name('clients');
            Route::get('/clients', [ClientController::class, 'index'])->name('clients');

        


            //produit

            Route::get('/produit', [ProduitController::class, 'index'])->name('produits');
            Route::post('/ajouter_produit', [ProduitController::class, 'create'])->name('produit.add');

            Route::post('/modifier_produit/{id}', [ProduitController::class, 'edit'])->name('produit.edit');
            Route::get('supprimer_produit/{id}', [ProduitController::class, 'destroy'])->name('produit.delete');


        Route::get('/liste_commandes_combines', [CommandeController::class, 'liste_commandes_combines'])->name('liste_commandes_combines');
        Route::get('/valider/{id}', [CommandeController::class, 'valider'])->name('valider');
        Route::get('/liste_commandes_par_client/{id}', [CommandeController::class, 'liste_commandes_par_client'])->name('liste_commandes_par_client');
        // Route::get('/liste_commandes_combines/{userId}', [CommandeController::class, 'liste_commandes_combines'])->name('liste_commandes_combines');
    });






//Routes cslient
Route::group(['middleware' => ['checkUserGroup:client']], function () {

        Route::get('shopping-cart', [ProduitController::class, 'shopping_cart'])->name('shopping.cart');
        Route::get('/liste_commandes/{userId}', [CommandeController::class, 'liste_commandes'])->name('liste_commandes');
        Route::post('/passer-commande', [CommandeController::class, 'commander'])->name('passer_commande');
        Route::delete('supprimer-produit-shopping-cart', [ProduitController::class, 'delete_produit_shopping_cart'])->name('delete.cart.produit');


});








// Route::get('supprimer_produit/{id}', [ProduitController::class, 'destroy'])->name('produit.delete');

Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
Route::get('/logout', [HomeController::class, 'perform'])->name('logout');


Route::get('/mailto', function(){
    Mail::to('rommeldongmo1978@gmail.com')
    ->send(new MailCommande());
});

Route::get('produit/{id}', [ProduitController::class, 'addBooktoCart'])->name('addBook.to.cart');
Route::get('infos_produit/{id}', [ProduitController::class, 'info_produit'])->name('infoproduit');


Route::get('/', [CategorieController::class, 'index'])->name('home');

Route::get('/category/{id}/products', [CategorieController::class, 'liste_produit_par_categorie'])->name('products.byCategory');


//  Route::get('/liste_commandes_par_client/{id}', function () {
//   return ('id');
// });//

// Route::get('/liste_commandes_par_client/{id}', [CommandeController::class, 'liste_commandes_par_client'])->name('liste_commandes_par_client');
