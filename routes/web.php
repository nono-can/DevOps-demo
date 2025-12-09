<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

## Routes Personnalisées (Placer en premier pour éviter les conflits)
// Rediriger la racine "/" vers la liste des produits
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Export PDF
Route::get('/products-pdf', [ProductController::class, 'exportPDF'])
    ->name('products.pdf');

##   Routes Ressource (CRUD)
// Routes CRUD produits (Crée les routes index, create, store, show, edit, update, destroy)
Route::resource('products', ProductController::class);