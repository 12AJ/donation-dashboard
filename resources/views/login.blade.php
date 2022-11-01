<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
   
    <title>Login Page</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
   
   
   <style>

form {
  border: 3px solid #f1f1f1;
}

label{
    font-size:40px;
    color:#DC5F00;
}
/* Full-width inputs */
input[type=email], input[type=password] {
  width: 50%;
  font-size:30px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size:25px;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}


.log{
    width:60%;
   height:120%;
    text-align:center;
    justify-content:center;
    margin-top:200px;
    margin-left:270px;

    /* border-radius:10px; */
    box-shadow: 0px 11px 17px -7px rgba(0,0,0,0.75);
    /* display: block; */
}
 </style>

</head>
<body>

<nav>
        <img src="imgs/logo.png" alt="logo">
        <p>Login Page</p>
        <img src="imgs/logo.png" alt="logo">
    </nav>

    <!-- <h1>hello there</h1> -->




<div class="log">

@if($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button class="close" type="button" data-dismiss="alert">X</button>
    <strong>{{$message}}</strong>
</div>
@endif

@if (count($errors)>0)

<div class="alert alert-danger">
    <ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif


<form method="post" action="/">
    {{csrf_field() }}
    <div class="username">
<label for="email">Username :-</label>
<input type="email" name="email">
</div>

<div class="pass">
<label for="password">Password :-</label>
<input type="password" name="password">
</div>
<button type="submit" name="loginbtn"  value="login">Submit</button>

</form>
</div>
</body>
</html>
