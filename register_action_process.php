
<?php
require "dbconnect.php";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$fullnameErr = $emailErr = $addressErr = $cityErr = $stateErr =  $countryErr = $phoneErr = $passwordErr = $purposeErr =  "";
$fullname = $email = $address = $city = $state = $country = $phone = $password = $purpose = "";
if ($_SERVE['REQUEST_METHOD'] = 'POST') {

  if (empty($_POST['fullname'])) {
    $fullnameErr = "Please Enter Your Full Name";
  }else{
    $fullname = test_input($_POST['fullname']);

    
  }
  if (empty($_POST["email"])) {
    $emailErr = "Please Enter a valid Email Address";
   }else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format";
            
   } 
    
  }
   if (empty($_POST['address'])) {
    $addressErr = "Please Enter Your Home Address";
  }else{
    $address = test_input($_POST['address']);
    
  }
   if (empty($_POST['city'])) {
    $cityErr = " Enter Your City";
  }else{
    $city = test_input($_POST['city']);
    
  }
   if (empty($_POST['state'])) {
    $stateErr = "Enter your state ";
  }else{
    $state = test_input($_POST['state']);
    
  }
   if (empty($_POST['country'])) {
    $countryErr = "Please Enter Your Country";
  }else{
    $country = test_input($_POST['country']);
    
  }
   if (empty($_POST['phone'])) {
    $phoneErr = "Please Enter Your Phone No";
  }else{
    $phone = test_input($_POST['phone']);
    
  }
    if (empty($_POST['purpose'])) {
    $purposeErr = "Please Enter Your Reason For Registration";
  }else{
    $purpose = test_input($_POST['purpose']);
    
  }
 
 if (empty($_POST['password'])) {
    $passwordErr = "Please Choose a password";
  }
  elseif($_POST['password']!= $_POST['Con_password']) {
        $passwordErr = 'Passwords should be same<br>';
        
    }else{
      $password = test_input($_POST['password']);
    }

 
 
 

   $fullname = mysqli_escape_string( $conn, $fullname);
   $email = mysqli_escape_string( $conn, $email);
   $address = mysqli_escape_string( $conn, $address);
   $city = mysqli_escape_string( $conn, $city);
   $state = mysqli_escape_string( $conn, $state);
   $country = mysqli_escape_string( $conn, $country);
   $purpose = mysqli_escape_string( $conn, $purpose);
   $phone = mysqli_escape_string( $conn, $phone);
   $password = mysqli_escape_string( $conn, md5($password));


     

  if ($fullname &&  $email && $address && $city && $state && $country && $phone && $purpose && $password  ) {
  $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $emailErr = "Email Address has been used ";
    }else{

     $query1 = "INSERT INTO `users`(`fullname`, `email`, `address`, `city`, `state`, `country`, `phone`, `password`, `purpose`, `createdate`)
       VALUES ('$fullname', '$email', '$address', '$city', '$state', '$country', '$phone','$password', '$purpose', NOW())";


        if (mysqli_query($conn, $query1)) {?>
          <div class="alert alert-success alert-dismissible">
        <p class="text-center w3-large text-white">Registration Successful... Please Login with Email and Password</p> 
        <a class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
      </div>

       <?php } else {
          echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
  
        }

         }


}
}

?>