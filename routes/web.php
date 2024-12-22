<?php

use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $total = count(Produk::all());
    return view("welcome",compact("total"));
});
Route::get('/product', [ProdukController::class, 'index'])->name('index.index');
route::get('/product/create', [ProdukController::class, 'create'])->name('index.create');
route::post('/product/store', [ProdukController::class, 'store'])->name('index.store');
route::get('/product/edit{id}', [ProdukController::class, 'edit'])->name('index.edit');
route::put('/product/update{id}', [ProdukController::class, 'update'])->name('index.update');
route::delete('/produk/delete{id}', [ProdukController::class, 'destroy'])->name('index.destroy');