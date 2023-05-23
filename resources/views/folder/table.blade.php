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

@section ('title', 'Table')

@section( 'content')
</header>
<body>
<form action="{{ route('save')}}" method="POST">
    @csrf
<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form class="px-md-2">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control"  name="First_name" required/>
                <label class="form-label" for="form3Example1q">First Name: </label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control"  name="Middle_name" required/>
                <label class="form-label" for="form3Example1q">Middle Name: </label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="Last_name" required/>
                <label class="form-label" for="form3Example1q" >Last Name: </label>
              </div>

              
              <div class="form-outline mb-4">
                <input type="date" id="form3Example1q" class="form-control" name="date_of_birth" required/>
                <label class="form-label" for="form3Example1q" >Date of Birth: </label>
              </div>

              <div class="form-outline mb-4">
                <input type="number" id="form3Example1q" class="form-control"name="age" required/>
                <label class="form-label" for="form3Example1q" >Age: </label>
              </div>

                
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="address" required/>
                <label class="form-label" for="form3Example1q" >Address: </label>
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

            </form>

            

          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  @endsection
</body>
</html>