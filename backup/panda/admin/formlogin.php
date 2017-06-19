<?php
include('login.php'); // Memasuk-kan skrip Login 

if(isset($_SESSION['login_user'])){
header("location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style type="text/css">
  .form-horizontal{
     width: 450px;
     position: relative;
     margin: 20px auto;
     margin-top: 150px;
     border-radius: 10px;

    }
  </style>
</head>
<body>

<div class="container">
<center><h2>Login Admin</h2></center>
  <form class="form-horizontal" role="form" action="" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username</label>
      <div class="col-sm-10">
        <input class="form-control" id="username" name="username" placeholder="username" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit" value="Login">Submit</button>
        <button type="reset" class="btn btn-danger" value="reset">reset</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
