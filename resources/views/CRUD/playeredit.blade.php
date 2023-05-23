<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet"  href="<?php echo asset('storage/css/crudstyle.css') ?>">
   <title> Player Account Information</title>
</head>

<body>
<div class="container" id="text">
<h1>PLAYER ACCOUNT INFORMATION</h1>
</div>
<br>

   <div class="container">
      <div class="text-center mb-4">
         <h3>{{$playername}} Account</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="{{ route('editsave', ['id' => $player['id']]) }}" method="post" style="width:50vw; min-width:300px;" >
         @csrf
            <div class="row mb-3">
               <div class="mb-3">
                  <label class="form-label">Full Name:</label>
                  <input type="text" class="form-control" name="fullname" value="{{ $player ['fullname']}}" required>
               </div>

               <div class="mb-3">
                  <label class="form-label">In-Game-Name:</label>
                  <input type="text" class="form-control" name="ign" value="{{ $player ['ign']}}" required>
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Username:</label>
               <input type="text" class="form-control" name="username" value="{{ $player ['username']}}" required>
            </div>

             <div class="mb-3">
               <label class="form-label">Password:</label>
               <input type="text" class="form-control" name="password" value="{{ $player ['password']}}" required>
            </div>
            <div>
               <button type="submit" class="btn btn-outline-success" name="submit">Save</button>
               <a href="{{ route ('index') }}" class="btn btn-outline-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

