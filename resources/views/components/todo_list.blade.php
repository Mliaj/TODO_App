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
            <br>
            <label>{{ $todo->title }}</label>
            <p>{{ $todo->content }}</p>

        </li>

    @endforeach
</ul>