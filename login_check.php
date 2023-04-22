<?php
session_start();
 if($_SESSION['status'] == 0){
  //header("Location: adm/painel.php");
    echo "login-success-user";
 }elseif($_SESSION['status'] == 1){
     header("Location: upload_new_vehicle.php");
     
    }else{
      header("Location: login.php");
    }
?>