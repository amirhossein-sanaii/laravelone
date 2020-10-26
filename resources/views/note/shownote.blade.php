@extends('layout.master')


@section('contant')

  

    @if($message = Session::get('msgdelet'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if($message = Session::get('msgupdate'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif



    @if($message = Session::get('msgcreate'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


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
<br>
    <form action="{{ route('note.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Titile </label>
            <input name="titlenote" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titile">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea placeholder="Description" name="descriptionnote" type="text" class="form-control" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary"> Add Note</button>
    </form>

<br>
<br>
<br>
<hr>

@foreach($notes as $note)

    <div class="card text-center">
        <div class="card-header">
            title: {{$note['titlenote']}}
        </div>
        <div class="card-body">
            <p class="card-text">{{$note['descriptionnote']}}</p>
            <form style="display: inline-block" action="{{ route('note.destroy',$note['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger" >Delet</button>
            </form>

            <a href="{{ route('note.edit',$note['id']) }}" class="btn btn-outline-success">Edit</a>
        </div>
        <div class="card-footer text-muted">
            {{ $note['created_at'] }}
        </div>
    </div>
    <br>
@endforeach

@endsection
