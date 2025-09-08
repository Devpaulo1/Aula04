<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index() {
        $allCategory = Category::all();
        return view('category.index', ['allCategory' => $allCategory]);
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        Category::create($request->all()); 
        return redirect('/category'); 
    }

       // Mostra o formulário de edição
    public function edit(Category $category) {
        return view('category.edit', ['category' => $category]);
    }


    public function update(Category $category, Request $request) {
        $category->update($request->all()); // atualiza o registro
        return redirect('/category'); // volta para a lista
    }


    public function show(category $category){
        return view('category.show', ['category'=>$category]);
    }


    // Deleta os dados da comida
    public function destroy(Category $category, Request $request) {
        $category->delete($request->all()); // atualiza o registro
        return redirect('/category'); // volta para a lista
    }

}
