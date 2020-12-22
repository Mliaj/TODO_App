@extends('template')

@section('content')
        <h1>TODO App</h1>

        <div class="jumbotron">
            <a href="/add" class="btn btn-primary">Add</a>
            <button class="btn btn-primary" data-toggle="modal" data-target=".edit-modal">Edit</button>
            <button class="btn btn-primary" data-toggle="modal" data-target=".delete-modal">Delete</button>
        </div>

        @include('components.todo_list')
        @include('components.delete_search_modal')
        @include('components.edit_search_modal')
@endsection