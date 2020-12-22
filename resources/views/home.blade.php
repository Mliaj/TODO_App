@extends('template')

@section('content')
        <h1>TODO App</h1>

        <div class="jumbotron">
            <a href="/add" class="btn btn-primary">Add</a>
            <button class="btn btn-primary" data-toggle="modal" data-target=".edit-modal">Edit</button>
            <button class="btn btn-primary" data-toggle="modal" data-target=".delete-modal">Delete</button>
            <br><br>

            <label for="">Filter</label><br>
            <div class="btn-group" role="group">
                <a href="{{ route('home') }}" class="btn btn-default">Default</a>
                <a href="{{ route('activeTodos') }}" class="btn btn-default">Active</a>
                <a href="{{ route('completedTodos') }}" class="btn btn-default">Completed</a>
            </div>
        </div>

        @switch(Route::currentRouteName())
            @case('home')
                @include('components.todo_list')
                
                @break
            @case('activeTodos')
                @include('components.active_todo_list')
                
                @break
            @case('completedTodos')
                @include('components.completed_todo_list')

                @break
        @endswitch

        @include('components.delete_search_modal')
        @include('components.edit_search_modal')
@endsection