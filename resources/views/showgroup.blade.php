@extends('layout.master')

@section('contant')

<br>
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">{{ $progect->nameprogect }}</a>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $progect->descriptionprogect }}</p>
            <a href="/task/{{ $progect->id }}/add" class="btn btn-primary">Add Task </a>
        </div>
    </div>
<br>
@foreach($tasks as $task)
      <div class="card text-center">
          <div class="card-header">
              title:{{ $task['titletask'] }}
          </div>
          <div class="card-body">
              <p class="card-text">{{ $task['descriptiontask'] }}</p>
              <form style="display: inline-block" action="/task/delete/{{$task['id']}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger" >Delet</button>
              </form>

              <a href="/task/edit/{{ $task['id'] }}" class="btn btn-outline-success">Edit</a>
              <a href="/task/setting/{{ $task['id'] }}" class="btn btn-outline-info">Settings Task</a>
          </div>
          <div class="card-footer text-muted">
            @if($task['datestarttask'] !== null)
            <div >
              Date start Task : {{$task['datestarttask']}}
            </div>
            @endif

            @if($task['dateendtask'] !== null)
            <div >
              Date End Task : {{$task['dateendtask']}}
            </div>
            @endif

            @if($task['timerequired'] !== null)
            <div >
              TIme Required : {{$task['timerequired']}}
            </div>
            @endif

            @if($task['status'] !== null)
            <div >
              Status : {{$task['status']}}
            </div>
            @endif

          </div>
      </div>
      <br><br><br>
@endforeach


@endsection
