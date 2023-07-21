<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index(){

        $todoList = ToDo::query()->paginate(5);
        return view('index')->with(['todoList' => $todoList]);
    }

    public function storage(Request $request){

        $request->validate([
            'name' => 'required',
            'user_id' => 'required|numeric'
        ]);
        $flight = new ToDo();

        $flight->name = $request->name;
        $flight->user_id = $request->user_id;

        $flight->save();

        return redirect('index');
    }

    public function edit(Request $request){
        view ('todo.edit');
    }

    public function destroy(Request $request){
        view ('todo.delete');
    }

}
