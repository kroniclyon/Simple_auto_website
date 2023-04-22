<?php
session_start(); 

require "dbconnect.php";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$emailErr = $passwordErr = "";
$email = $password = "" ;

if ($_SERVE['REQUEST_METHOD'] = 'POST'){

    if (empty($_POST['email'])) {
    $emailErr = "Please Enter Your Email Address";
  }else{
    $email = test_input($_POST['email']);

  }

  if (empty($_POST['password'])) {
    $passwordErr = "Please Enter Correct Password";
  }else{
    $password = test_input($_POST['password']);

  }

  $email = mysqli_escape_string( $conn, $email);
  $password = mysqli_escape_string( $conn, md5($password));

  if (empty($emailErr) && empty($passwordErr)) {
    $query = " SELECT * FROM `users` WHERE `email` = '{$email}' AND `password` = '{$password}' ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
       
  // output data of each row
      while($row = mysqli_fetch_array($result)) {
        
        $_SESSION['id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['status'] = $row['status'];
        if($row['status']=="1"){
            header("location:admin/upload_new_vehicle.php");
        }else if($row['status']=="0"){
            echo "User Logged in";
        }else{

          header("location:login.php");
        }
        
      }
    } else {
      echo "Email and Password not associated with any account.. Register!";
    }

    mysqli_close($conn);
  }
}
?>