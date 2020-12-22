@extends('template')

@section('content')
        <h1>TODO App</h1>

        <div class="jumbotron">
            <a href="/add" class="btn btn-primary">Add</a>
            <a href="#" class="btn btn-primary">Edit</a>
            <button class="btn btn-primary">Delete</button>
        </div>

        @include('components.todo_list')
@endsection