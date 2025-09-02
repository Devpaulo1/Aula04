<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    // Mostra todas as comidas cadastradas
    public function index() {
        return view('food.index', ['allFood' => Food::all()]);
    }

    // Mostra o formulário de criação
    public function create() {
        return view('food.create');
    }

    // Salva uma nova comida no banco
    public function store(Request $request) {
        Food::create($request->all()); // cria um novo registro
        return redirect('/food'); // redireciona para a lista
    }

    // Mostra o formulário de edição
    public function edit(Food $food) {
        return view('food.edit', ['food' => $food]);
    }

    // Atualiza os dados da comida no banco
    public function update(Food $food, Request $request) {
        $food->update($request->all()); // atualiza o registro
        return redirect('/food'); // volta para a lista
    }
}


//STORE = Guardar