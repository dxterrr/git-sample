<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<header>
@extends ('folder/layout')

@section ('title', 'Image')

@section( 'content')

</header>

<img src="<?php echo asset("storage/css/img.jpg")?>" class="img">
@endsection
    
</body>
</html>