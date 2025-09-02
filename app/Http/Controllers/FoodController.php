<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index () {
        return view('food.index' , ['allFood'=>food::all ()]);
    }

    public function create(){
        return view('food.create');
    }

    public function store (Request $request){
        food::create($request->all());
        return redirect('/food');
    }
}

//STORE = Guardar