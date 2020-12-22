<ul>
    @foreach ($todoList as $todo)
        <li>
            
            <span>#{{ $todo->id }}</span>
            <label>{{ $todo->due }}</label>             
            @if ($todo->isActive)
                <button class="btn btn-sm btn-info" style="pointer-events: none">{{ $todo->getIsActive() }}</button>
            @else
                <button class="btn btn-sm btn-success" style="pointer-events: none">{{ $todo->getIsActive() }}</button>
            @endif
            <form action="{{ route('delete') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="routeName" value="{{ Route::currentRouteName() }}">
                <button type="submit" class="btn btn-sm btn-danger" name="id" value="{{ $todo->id }}">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
            </form>

            <a href="{{ route('editTodo', $todo->id) }}" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
            
            <br>
            <label>{{ $todo->title }}</label>
            <p>{{ $todo->content }}</p>

        </li>

    @endforeach
</ul>