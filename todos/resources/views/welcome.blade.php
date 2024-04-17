@extends('layouts.main')
@push('head')
    <title>To-Do List App</title>
@endpush

@section('main-section')

<div class="container">
    <div class="my-5 d-flex justify-content-between align-items-center ">
        <div class="h2">All Todos</div>
            <a href="{{route("todo.create")}}" class="btn btn-success btn-lg ">Add Todo</a>
        </div>

    <table class="table table-stripped table-dark">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>

        @foreach ($todos as $todo)
        <tr valign="middle">
            <td>{{$todo->name}}</td>
            <td>{{$todo->work}}</td>
            <td>{{$todo->dueDate}}</td>
            <td>
                <a href="{{route("todo.edit", $todo->id)}}" class="btn btn-success btn-sm">Update</a>
                <a href="{{route("todo.delete", $todo->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>

</div>
    
@endsection