<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo asset('storage/css/crudstyle.css') ?>">
  <title> Player Account Information</title>
</head>

<body>
  <div class="container" id="text">
  <h1>PLAYER ACCOUNT INFORMATION</h1>
</div>


<br>

  <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route ('add') }}" class="btn btn-outline-dark mb-3 justify-content-md-end">Add New</a>
    </div>
    <table class="table table-hover text-center">
      <thead class="table table-secondary">
        <tr>
         <th scope="col">Player Id</th>
          <th scope="col">Full Name</th>
          <th scope="col">In-Game-Name</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col"></th>
        </tr>
      </thead>
      @foreach($player_profile as $player)
      <tbody>
        <tr>
     <td>{{ $player->id}}</td>
      <td>{{ $player->fullname}}</td>
      <td>{{ $player->ign}}</td>
      <td>{{ $player->username}}</td>
      <td>{{ $player->password}}</td>            
            <td>
            <a href="{{ route ('playeredit', ['id' => $player->id]) }}" class="link-dark"><button type="button" class="btn btn-outline-success">EDIT</button></a>
            <a href="delete/{{$player->id}}" class="link-dark"><button type="button" class="btn btn-outline-danger">Delete</button></a>
            </td>
          @endforeach
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>