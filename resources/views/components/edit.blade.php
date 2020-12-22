@extends('template')

@section('content')
<form action="/update/" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label for="">What to do?</label>
      <textarea name="content" id="" cols="30" rows="10" class="form-control" style="resize: none"></textarea>
    </div>
    <div class="form-group">
      <label for="">Date and Time of completion</label>
      <input type="date" name="date">
      <input type="time" name="time">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>  
@endsection