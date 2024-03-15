<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $newImage = $image->hashName();
            $image->move("image",$newImage);
            $todo->image = "image/$newImage";
        }
        $todo->save();
        toast('Task Added','success');
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
        $deleteImage = public_path( $deleteTodo->image );
        if(file_exists($deleteImage)){
            unlink($deleteImage);
        }
        // return $deleteImage;

        $deleteTodo->delete();
        return redirect()->back();
    }

    public function statusComelete($id){
        $todo = Todo::findOrFail($id);
        $todo->status = 1;
        $todo->save();
        toast('Status changed','success');
        return redirect()->back();


    }

    public function notComplete($id){
        $todo = Todo::findOrFail($id);
        $todo->status = 0;
        $todo->save();
        toast('Status changed','success');
        return redirect()->back();
    }



}
