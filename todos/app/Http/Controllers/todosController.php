<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class todosController extends Controller
{
    // fetcing all the todos
    public function index(){
        $todos = todos :: all();
        $data = compact('todos'); // compacting to arrays
        return view("welcome")->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'work'=>'required',
                'dueDate'=>'required',
            ]
        );
        
        $todo =new todos; //object created
        $todo->name=$request['name'];
        $todo->work=$request['work'];
        $todo->dueDate=$request['dueDate'];
        $todo->save();

        return redirect(route("todo.home"));
    }
}
