@extends('layout.master')

@section('contant')

    @if($message = Session::get('msgcreategroup'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if($message = Session::get('msgupdategroup'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

@if($message = Session::get('msgdeletgroup'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@foreach($progects as $progect)


    <div class="card">
        <div class="card-header">
            Title:{{ $progect['nameprogect'] }}
        </div>
        <div class="card-body">
            <h6 class="card-title" style="opacity: 0.5;">{{ $progect['created_at'] }}</h6>
            <h3 class="card-text">{{ $progect['descriptionprogect'] }}</h3>
            <a href="{{ route('progect.edit',$progect['id']) }}" class="btn btn-primary">Edit</a>
            <form style="display: inline" action="{{ route('progect.destroy',$progect['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary">Delet</button>
            </form>
            <a href="{{ route('show',$progect) }}" class="btn btn-primary">Show</a>
        </div>
    </div>
    <br>
@endforeach
@endsection
