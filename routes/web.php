<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [homeController::class ,'homeFunc']);
// Index lista tudo
Route::get('/food', [FoodController::class , 'index' ]);

Route::get('/food/create' , [FoodController::class, 'create']);

Route::post('/food', [FoodController::class , 'store']);

//POST : Criar
//GET: Mostrar
//PUT: Atualizar
//DELETE: Deletar