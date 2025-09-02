<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\FoodController;

// Página inicial (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Página Home
Route::get('/home', [homeController::class ,'homeFunc']);

// Mostra todas as comidas
Route::get('/food', [FoodController::class , 'index']);

// Mostra o formulário de criação
Route::get('/food/create', [FoodController::class, 'create']);

// Salva os dados da nova comida (CREATE)
Route::post('/food', [FoodController::class , 'store']);

// Mostra o formulário para editar uma comida existente (busca pelo ID)
Route::get('/food/{food}/edit', [FoodController::class, 'edit']);

// Atualiza os dados da comida (UPDATE)
Route::put('/food/{food}', [FoodController::class, 'update']);

// Remove os dados da comida (DELETA)
Route::delete('/food/{food}', [FoodController::class, 'destroy']);

//POST : Criar
//GET: Mostrar
//PUT: Atualizar
//DELETE: Deletar