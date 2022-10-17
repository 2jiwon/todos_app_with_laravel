@extends('layouts.app')

@section('title')

Single To do

@endsection

@section('content')

    <h1 class="text-center my-5">
      {{ $todo->name }}	
    </h1>
  
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card card-default">
          <div class="card-header">
            Details
          </div>

          <div class="card-body">
            {{ $todo->description }}
          </div>

        </div>

        <a class="btn btn-info btn-sm my-2 float-right" href="/todos/{{ $todo->id }}/edit">Edit</a>
        <a class="btn btn-danger btn-sm my-2 mx-2 float-right" href="/todos/{{ $todo->id }}/delete">Delete</a>

      </div>
    </div>

@endsection
