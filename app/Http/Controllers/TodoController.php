<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
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


    public function addTodo(TodoRequest $request)
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

    public function update(Request $request, $id){
        $todoUpdate = Todo::findOrFail($id);
        $todoUpdate->task = $request->task;
        $todoUpdate->update();
        return redirect()->route('todo');
    }

    public function delete($id){
        $deleteTodo = Todo::findOrFail($id);
        $deleteTodo->delete();
        return redirect()->back();
    }

}
