<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function todo()
    {

        // Select * from todos
        $todo = Todo::all();
        return view('Page.Todo.todo',compact('todo'));
    }


    public function addTodo(Request $request)
    {

        $todo = new Todo();
        $todo->task = $request->falano;
        $todo->save();
        return redirect()->back();
    }

    public function edit($id){

        $editTodos = Todo::findOrFail($id);
        return view('Page.Todo.Edit',compact('editTodos'));

    }
}
