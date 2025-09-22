<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;

class FoodController extends Controller
{
    // Mostra todas as comidas cadastradas
    public function index() {
        return view('food.index', ['allFood' => Food::all()]);
    }

    // Mostra o formulário de criação
    public function create() {
        return view('food.create', ['categories' => Category::all()]);
    }

    // Salva uma nova comida no banco
    public function store(Request $request) {
        Food::create($request->all()); // cria um novo registro
        return redirect('/food'); // redireciona para a lista
    }

    // Mostra o formulário de edição
    public function edit(Food $food) {
        return view('food.edit', [
            'food' => $food,
            'categories' => Category::all()
        ]);
    }

    // Atualiza os dados da comida no banco
    public function update(Food $food, Request $request) {
        $food->update($request->all()); // atualiza o registro
        return redirect('/food'); // volta para a lista
    }


    public function show(food $food){
        return view('food.show', ['food'=>$food]);
    }


    // Deleta os dados da comida
    public function destroy(Food $food, Request $request) {
        $food->delete($request->all()); // atualiza o registro
        return redirect('/food'); // volta para a lista
    }


}


//STORE = Guardar