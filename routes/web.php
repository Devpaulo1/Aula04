<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CategoryController;

// Página inicial (welcome)
Route::get('/', function () {
    return view('welcome');
});

                    // FOOD
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
Route::get('/food/{food}', [FoodController::class, 'show']);
// Remove os dados da comida (DELETA)
Route::delete('/food/{food}', [FoodController::class, 'destroy']);

                // Categorias

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{category}', [CategoryController::class, 'update']);
Route::get('/category/{category}', [CategoryController::class, 'show']);
Route::delete('/category/{category}', [CategoryController::class, 'destroy']);



//POST : Criar
//GET: Mostrar
//PUT: Atualizar
//DELETE: Deletar