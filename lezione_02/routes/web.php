<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, "Welcome"])->name("homepage_");

Route::get('/chi-siamo', [PublicController::class, "Chisiamo"])->name("chisiamo_");

route::get("/prodotti", [PublicController::class, "Prodotti"])->name("prodotti_");

// rotta parametrica
route::get("/dettaglio-prodotto/{id}", [PublicController::class, "Dettaglioprodotto"])->name("dettaglioprodotto_");

route::get("/lavora-con-noi", [PublicController::class, "Lavoraconnoi"])->name("lavoraconnoi_");