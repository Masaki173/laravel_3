<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(Request $request){
        $items = Todo::all();
        return view('todos.index', compact('items'));
    }
    public function create(Request $request){
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
        return redirect('/todos');
    }

}
