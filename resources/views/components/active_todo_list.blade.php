<ul>
    @foreach ($todoList as $todo)
        <li>

            <span>#{{ $todo->id }}</span>
            <label>{{ $todo->due }}</label> 

            <button class="btn btn-sm btn-info" style="pointer-events: none">{{ $todo->getIsActive() }}</button>
            
            <div class="form-inline">
                <div class="form-group">
                    <form action="{{ route('delete') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="routeName" value="{{ Route::currentRouteName() }}">
                        <button type="submit" class="btn btn-sm btn-danger" name="id" value="{{ $todo->id }}">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </form>
                </div>

                <a href="{{ route('editTodo', $todo->id) }}" class="btn btn-sm btn-primary">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </div>

            <br>
            <label>{{ $todo->title }}</label>
            <p>{{ $todo->content }}</p>

        </li>

    @endforeach
</ul>