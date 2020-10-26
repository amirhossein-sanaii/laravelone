@extends('layout.master')

@section('contant')
<br><br>
<form action="/task/edit/{{ $task['id'] }}" method="post">
    @csrf
        @method('put')


    <div class="form-group">
        <label for="exampleInputEmail1">Edit Titile Task :</label>
        <input value="{{ $task['titletask'] }}" name="ttask" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titile">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Edit Description Task :</label>
        <textarea name="dtask" type="text" class="form-control" placeholder="Description" >{{ $task['descriptiontask'] }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Edit Task </button>
</form>
@endsection
