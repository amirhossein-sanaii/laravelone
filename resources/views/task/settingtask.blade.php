<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>setting task</title>
  </head>
  <body>
    <br>
<div class="container" >
  <div class="card" style="width: 100%;text-align: center;">
    <div class="card-body">
      <h5 class="card-title">{{$task['titletask']}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$progect['nameprogect']}}</h6>
      <p class="card-text">{{ $task['descriptiontask'] }}</p>


    </div>
  </div>

  <br><br>

  <form action="/task/addsetting/{{ $task['id'] }}" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Date Start Task</label>
        <input name="datestarttask" value="{{ $task['datestarttask'] }}" type="text" class="form-control" id="inputEmail4" placeholder="Date Start Task">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Date End Task</label>
        <input name="dateendtask" value="{{ $task['dateendtask'] }}"  type="text" class="form-control" id="inputPassword4" placeholder="Date End Task">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Time Required Task</label>
        <input name="timerequired" value="{{ $task['timerequired'] }}" type="text" class="form-control" id="inputPassword4" placeholder="Time Required Task">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">situation</label>
        <input name="status" value="{{ $task['status'] }}" type="text" class="form-control" id="inputPassword4" placeholder="situation">
      </div>

</div>
<button type="submit" class="btn btn-info">Set setting</button>
  </form>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
