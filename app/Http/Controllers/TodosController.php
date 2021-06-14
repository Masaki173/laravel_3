<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodosController extends Controller
{
    public function index(Request $request){
        $items = Todo::all();
        return view('todos.index', compact('items'));
    }
    public function store(TodoRequest $request){
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
        return redirect('/todos');
    }
    public function delete($id){
        $item = Todo::findOrFail($id);
        $item->delete();
        return redirect('/todos');
    }
}
