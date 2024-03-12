<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function todo()
    {
        return view('Page.Todo.todo');
    }

    
    public function addTodo(Request $request)
    {

        $todo = new Todo();
        $todo->task = $request->blabla;
        $todo->save();
    }
}
