@extends('layout.master')

@section('contant')
    <br>
    <h4>Add Task for : Project {{$progect->nameprogect}}</h4>

    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="addtask/{{ $progect->id }}" method="post">
        @csrf


        <div class="form-group">
            <label for="exampleInputEmail1">Titile Task :</label>
            <input name="ttask" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titile">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description Task :</label>
            <textarea name="dtask" type="text" class="form-control" placeholder="Description" ></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add Task </button>
    </form>
@endsection
