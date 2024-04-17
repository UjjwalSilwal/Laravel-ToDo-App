<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todosController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'work'=>'required',
                'dueDate'=>'required',
            ]
        );
        echo "validation complete!";
    }
}
