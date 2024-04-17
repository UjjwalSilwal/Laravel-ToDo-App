@extends('layouts.main')
@push('head')
    <title>Update Todo</title>
@endpush

@section('main-section')

<div class="container">
    <div class="my-5 d-flex justify-content-between align-items-center ">
        <div class="h2">Update Todo</div>
        <a href="" class="btn btn-primary btn-lg">Back</a>
    </div>

   <div class="card">
    <div class="card-body">
        <form action="" method="POST">
            @csrf

            <label for="" class="form-label mt-4">Name</label>
            <input type="text" name="name" class="form-control">

            <label for="" class="form-label mt-4">Work</label>
            <input type="text" name="name" class="form-control">

            <label for="" class="form-label mt-4">Due Date</label>
            <input type="date" name="name" class="form-control">

            <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
        </form>
    </div>
   </div>

</div>
    
@endsection