

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
<title>Register</title>
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
</header><br><br>
<div class="container"><br>
  <h2 class="text-center jumbotron">Register An Account </h2>
  <?php include 'register_action_process.php';?>
  <div class="rows">
    <form method="post" action="#">
    <div class=" col-sm-6 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Full Name:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="text"  name="fullname" " placeholder="Jane Doe">
   <span style="font-size: 12px;" class="w3-text-red">* <?php echo $fullnameErr;?></span>
 </div>
 <div class=" col-sm-6 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Email:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="email" name="email"  id="email" placeholder="jane@gmail.com">
   <span style="font-size: 12px;" class="w3-text-red">* <?php echo $emailErr;?></span>
 </div>
 <div class=" col-sm-7 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Home Address:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="text"  name="address" " placeholder="Enter Your Home Address">
   <span style="font-size: 12px;" class="w3-text-red">* <?php echo $addressErr;?></span>
</div>
<div class=" col-sm-3 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">City:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="text"  name="city" " placeholder="Enter Your City">
   <span style="font-size: 12px;" class="w3-text-red">* <?php echo $cityErr;?></span>
</div>
<div class=" col-sm-3 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">State:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="text"  name="state" " placeholder="Enter Your State">
   <span style="font-size: 12px;" class="w3-text-red">* <?php echo $stateErr;?></span>
</div>
<div class=" col-sm-3 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Country:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="text"  name="country" " placeholder="Enter Your Country">
   <span style="font-size: 12px;" class="w3-text-red">* <?php echo $countryErr;?></span>
</div>
<div class="col-sm-5 form-group">
        <label style="color: rgb(140, 140, 140);" for="package">Purpose of Registration</label>
        <select style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg" id="package" name="purpose">
          <option value="">Choose Option</option>
          <option value="Buyer">As a Buyer</option>
          <option value="Agent ">As an Agent</option>
        </select>
        <span style="font-size: 12px;" class="w3-text-red">* <?php echo $purposeErr;?></span>
      </div>
<div class=" col-sm-5 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Phone Number:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="text"  name="phone" " placeholder="Enter Your Phone Number with country code">
   <span style="font-size: 12px;" class="w3-text-red">* <?php echo $phoneErr;?></span>
</div>
<div class=" col-sm-3 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Password:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="password"  name="password" " placeholder="Choose a New Password">
   <span style="font-size: 12px;" class="w3-text-red">* <?php echo $passwordErr;?></span>
</div>
<div class=" col-sm-3 form-group">
      <label style="color: rgb(140, 140, 140);" for="email">Confirm Password:*</label>
   <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="password"  name="Con_password" " placeholder="Re-enter Password">
</div>
<div class="form-group col-sm-10">
  <label class="w3-text-grey"><input style="font-size: 14px; background-color: #f8f8f8;" type="checkbox" value="" name="check"> I agree to the <a href="terms_of_use.php">terms and conditions</a></label>
</div>
<div class="form-group col-sm-10">
  <button style="font-size: 17px;" type="submit" name="register" class="btn btn-lg btn-warning btn-block"> Complete Register</button>
   </div>
</form>
    
  </div>
</div><br><br><br><br>

<footer>
  <?php include "home_footer.php" ?>
</footer>

	
</body>
</html>