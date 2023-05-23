<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
  @extends ('folder/layout2')

@section ('title', 'List')

@section( 'content')
</header>


<body>
  <div class="container" id="text">
  <h1> ACCOUNT INFORMATION</h1>
</div>
<br>

  <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

    </div>
    <table class="table table-hover table-dark text-center">
      <thead class="table table-secondary">
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Middle Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Age</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      @foreach($sample_profile as $sample)
      <tbody>
        <tr>
      <td>{{ $sample->First_name}}</td>
      <td>{{ $sample->Middle_name}}</td>
      <td>{{ $sample->Last_name}}</td>
      <td>{{ $sample->date_of_birth}}</td>
      <td>{{ $sample->age}}</td>
      <td>{{ $sample->address}}</td>
        <td>
            <a href="{{ route ('edit', ['id' => $sample->id]) }}" class="link-dark"><button type="button" class="btn btn-outline-success">EDIT</button></a>
            <a href="delete/{{$sample->id}}" class="link-dark"><button type="button" class="btn btn-outline-danger">Delete</button></a>
        </td>
      </tr>
      
      @endforeach
      </tbody>

    </table>
  </div>
  @endsection
</body>
</html>