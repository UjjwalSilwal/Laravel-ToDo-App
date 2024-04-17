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

    // for storing it to database
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
    
    public function delete($id){
        todos :: find($id)->delete();
        return redirect(route("todo.home"));
        
    }

    public function edit($id){
        $todo= todos:: find($id);
        $data = compact('todo');
        return view("update")->with($data);

    }

    public function updateData(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'work'=>'required',
                'dueDate'=>'required',
            ]
        );
        $id=$request['id'];
        
        $todo =todos::find($id);
        $todo->name=$request['name'];
        $todo->work=$request['work'];
        $todo->dueDate=$request['dueDate'];
        $todo->save();

        return redirect(route("todo.home"));

    }

    
}
