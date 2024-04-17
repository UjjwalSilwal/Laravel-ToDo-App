@extends('layouts.main')
@push('head')
    <title>Update Todo</title>
@endpush

@section('main-section')

<div class="container">
    <div class="my-5 d-flex justify-content-between align-items-center ">
        <div class="h2">Update Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-secondary btn-lg">Back</a>
    </div>

   <div class="card">
    <div class="card-body">
        <form action="{{route("todo.updateData")}}" method="POST">
            @csrf

            <label for="" class="form-label mt-4">Name</label>
            <input type="text" name="name" class="form-control" value="{{$todo->name}}">

            <label for="" class="form-label mt-4">Work</label>
            <input type="text" name="work" class="form-control" value="{{$todo->work}}">

            <label for="" class="form-label mt-4">Due Date</label>
            <input type="date" name="dueDate" class="form-control" value="{{$todo->dueDate}}">

            <input type="number" name="id" value="{{$todo-> id}}" hidden>

            <button class="btn btn-success btn-lg mt-4">Update Todo</button>
        </form>
    </div>
   </div>

</div>
    
@endsection