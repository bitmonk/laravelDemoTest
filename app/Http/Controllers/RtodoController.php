<?php

namespace App\Http\Controllers;

use App\Models\ResourceTodo;
use Illuminate\Http\Request;

class RtodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resourceTodo = ResourceTodo::all();
       return view('Page.ResourseTodo.Rtodo',compact('resourceTodo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  http://127.0.0.1:8000/crud/create
    public function create()
    {
        return view('Page.ResourseTodo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resourceTodo = new ResourceTodo();
        $resourceTodo->task = $request->task;
        $resourceTodo->save();
        return redirect()->route('crud.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resourceTodoEdit = ResourceTodo::findOrFail($id);
        return view('Page.ResourseTodo.edit',compact('resourceTodoEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resourceTodo = ResourceTodo::findOrFail($id);
        $resourceTodo->task = $request->task;
        $resourceTodo->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $resourceTodoDelete = ResourceTodo::findOrFail($id);
       $resourceTodoDelete->delete();
       return redirect()->back();
    }

    public function setstatus (){
        return 'comeplete';
    }
}
