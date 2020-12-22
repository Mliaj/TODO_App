@extends('template')

@section('content')
<form action="/update/{{ $todo->id }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" class="form-control" name="title" value="{{ $todo->title }}">
    </div>
    <div class="form-group">
      <label for="">What to do?</label>
      <textarea name="content" id="" cols="30" rows="10" class="form-control" style="resize: none">{{ $todo->content }}</textarea>
    </div>
    <div class="form-group">
      <label for="">Date and Time of completion</label>
      <input type="date" name="date" value="{{ $todo->getDueDateValue($todo) }}">
      <input type="time" name="time" value="{{ $todo->getDueTimeValue($todo) }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>  
@endsection