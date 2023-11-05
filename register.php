<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        body{
            background-image: url("bg.jpg");
            background-size: cover;
        }
        form{
            background-color:#fff;
            margin-top:6em;
            margin-left:30em;
            margin-right:10em;
            padding:30px;
            box-shadow: 10px 10px 8px #888888;
        }
    </style>
</head>
<body>
   <div class="container">
   <form method="POST">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputname" name="name" >
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputnumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_number">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  Already registered?<a href="login.php">Login</a>
</form>
   </div> 
</body>
</html>