<?php include 'login-action.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Login</title>
</head>
<style>

body {
  margin: 0;
  font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
  color: black;
  font-size: 16px;

}

</style>
<body>
<header>
  <?php include "home_header.php" ?>
</header><br>
<br>

<div class="container"><br>
  <h2 class="text-center jumbotron">Enter Details to Login</h2>
  
  <div class="rows">
    <form method="post" action="#">
    <div class=" col-sm-6 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Email:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="email"  name="email" " placeholder="Enter Your Email Address">
   <span style="font-size: 12px;" class="w3-text-red">*<?php echo "$emailErr"; ?> </span>
 </div>
 <div class=" col-sm-6 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Password:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="password"  name="password" " placeholder="Enter Password">
   <span style="font-size: 12px;" class="w3-text-red">*<?php echo "$passwordErr"; ?> </span>
 </div>

<div class="form-group col-sm-10">
  <button style="font-size: 16px;" type="submit" name="login" class="btn btn-lg btn-primary btn-block">Login</button>
   </div>
</form>
    
  </div>
</div>
<br>
<br>
<br>

<footer>
  <?php include "home_footer.php" ?>
</footer>

	
</body>
</html>