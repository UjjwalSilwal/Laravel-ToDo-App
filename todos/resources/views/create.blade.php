@extends('layouts.main')
@push('head')
    <title>Add Todo</title>
@endpush

@section('main-section')

<div class="container">
    <div class="my-5 d-flex justify-content-between align-items-center ">
        <div class="h2">Create/Add Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-secondary btn-lg">Back</a>
    </div>

   <div class="card">
    <div class="card-body">

        <form action="{{route("todo.store")}}" method="POST">
            {{-- Token --}}
            @csrf

            <label for="" class="form-label mt-4">Name</label>
            <input type="text" name="name" class="form-control">

            <label for="" class="form-label mt-4">Work</label>
            <input type="text" name="name" class="form-control">

            <label for="" class="form-label mt-4">Due Date</label>
            <input type="date" name="name" class="form-control">

            <button class="btn btn-success btn-lg mt-4">Add Todo</button>
        </form>
    </div>
   </div>

</div>
    
@endsection