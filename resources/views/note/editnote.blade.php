@extends('layout.master')


@section('contant')
<br>
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
<br>
    <form action="{{ route('note.update', $note['id']) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Titile </label>
            <input value="{{ $note['titlenote'] }}" name="titlenote" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titile">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="descriptionnote" type="text" class="form-control" >{{ $note['descriptionnote'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>


@endsection
