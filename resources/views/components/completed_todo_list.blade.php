<ul>
    @foreach ($todoList as $todo)
        <li>

            <span>#{{ $todo->id }}</span>
            <label>{{ $todo->due }}</label> 
            
            <button class="btn btn-sm btn-success" style="pointer-events: none">{{ $todo->getIsActive() }}</button>
            
            <br>
            <label>{{ $todo->title }}</label>
            <p>{{ $todo->content }}</p>

        </li>

    @endforeach
</ul>