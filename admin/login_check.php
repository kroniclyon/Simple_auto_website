<?php
session_start();
// login checker for 'customer' access level 
// if access level was not 'Admin', redirect him to login page
if(isset($_SESSION['status']) && $_SESSION['status'] == "1"){

 }   
else{
	header("location: ../login.php");
}
?>