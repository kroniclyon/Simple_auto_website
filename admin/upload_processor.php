<?php
 require "../dbconnect.php";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$vehiclename = $category = $year = $price = $vin = $engine = $transmission = $mileage = $veh_condition = $fuel = $interior = $exterior = $comment = $location5 = $location1 = $location2 = $location3 = $location4 = $location6 = $location7 = $location8 = $location9 = $location10 = $location11 = $location12 = "";

$vehiclenameErr = $categoryErr = $yearErr = $priceErr = $vinErr = $engineErr = $transmissionErr = $mileageErr = $veh_conditionErr = $fuelErr = $interiorErr = $exteriorErr = $commentErr = $location5Err = $location1Err = $location2Err = $location3Err = $location4Err = $location6Err = $location7Err = $location8Err = $location9Err = $location10Err = $location11Err = $location12Err = "";

if ($_SERVE['REQUEST_METHOD'] = 'POST') {

  if (empty($_POST['vehiclename'])) {
    $vehiclenameErr = "Please Enter the name of the vehicle";
  }else{
    $vehiclename = test_input($_POST['vehiclename']);

    
  }
  if (empty($_POST['category'])) {
    $categoryErr = "Please Choose a category";
  }else{
    $category = test_input($_POST['category']);

    
  }
  if (empty($_POST['year'])) {
    $yearErr = "Production Year of Vehicle is Empty";
  }else{
    $year = test_input($_POST['year']);

    
  }
  if (empty($_POST['price'])) {
    $priceErr = "Please Enter the Cost of the vehicle";
  }else{
    $price = test_input($_POST['price']);

    
  }
  if (empty($_POST['vin'])) {
    $vinErr = "Vin Number Missing";
  }else{
    $vin = test_input($_POST['vin']);

    
  }
  if (empty($_POST['engine'])) {
    $engineErr = "Engine Description not Found";
  }else{
    $engine = test_input($_POST['engine']);

    
  }
  if (empty($_POST['transmission'])) {
    $transmissionErr = "Transmission of Vehicle Empty";
  }else{
    $transmission = test_input($_POST['transmission']);

    
  }
  if (empty($_POST['mileage'])) {
    $mileageErr = "Mileage of Vehicle is Empty";
  }else{
    $mileage = test_input($_POST['mileage']);

    
  }
  if (empty($_POST['veh_condition'])) {
    $veh_conditionErr = "Choose the Condition of the Vehicle";
  }else{
    $veh_condition = test_input($_POST['veh_condition']);

    
  }
  if (empty($_POST['fuel'])) {
    $fuelErr = "Choose a Fuel Type";
  }else{
    $fuel = test_input($_POST['fuel']);

    
  }
  if (empty($_POST['interior'])) {
    $interiorErr = "Enter the Color of the Interior";
  }else{
    $interior = test_input($_POST['interior']);

    
  }
  if (empty($_POST['exterior'])) {
    $exteriorErr = "Enter the Color of the Exterior";
  }else{
    $exterior = test_input($_POST['exterior']);

    
  }
  if (empty($_POST['comment'])) {
    $commentErr = "Add Other Description Or Specification of the Vehicle";
  }else{
    $comment = test_input($_POST['comment']);

    
  }
  if(isset($_FILES["main_photo"]) && $_FILES["main_photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["main_photo"]["name"];
        $filetype = $_FILES["main_photo"]["type"];
        $filesize = $_FILES["main_photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location5="uploads/" . $filename;
            if(file_exists($location5)){

                $location5Err = "Error:" .$location5 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["main_photo"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location5Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location5Err = "Error:  Uploading Failed ";
    }



    if(isset($_FILES["photo1"]) && $_FILES["photo1"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo1"]["name"];
        $filetype = $_FILES["photo1"]["type"];
        $filesize = $_FILES["photo1"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location1="uploads/" . $filename;
            if(file_exists($location1)){

                $location1Err = "Error:" .$location1 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo1"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location1Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location1Err = "Error:  Uploading Failed ";
    }


    if(isset($_FILES["photo2"]) && $_FILES["photo2"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo2"]["name"];
        $filetype = $_FILES["photo2"]["type"];
        $filesize = $_FILES["photo2"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location2="uploads/" . $filename;
            if(file_exists($location2)){

                $location2Err = "Error:" .$location2 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo2"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location2Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location2Err = "Error:  Uploading Failed ";
    }
    if(isset($_FILES["photo3"]) && $_FILES["photo3"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo3"]["name"];
        $filetype = $_FILES["photo3"]["type"];
        $filesize = $_FILES["photo3"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location3="uploads/" . $filename;
            if(file_exists($location3)){

                $location3Err = "Error:" .$location3 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo3"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location3Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location3Err = "Error:  Uploading Failed ";
    }


    if(isset($_FILES["photo4"]) && $_FILES["photo4"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo4"]["name"];
        $filetype = $_FILES["photo4"]["type"];
        $filesize = $_FILES["photo4"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location4="uploads/" . $filename;
            if(file_exists($location4)){

                $location4Err = "Error:" .$location4 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo4"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location4Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location4Err = "Error:  Uploading Failed ";
    }

    if(isset($_FILES["photo5"]) && $_FILES["photo5"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo5"]["name"];
        $filetype = $_FILES["photo5"]["type"];
        $filesize = $_FILES["photo5"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location6="uploads/" . $filename;
            if(file_exists($location6)){

                $location6Err = "Error:" .$location6 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo5"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location6Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location6Err = "Error:  Uploading Failed ";
    }

    if(isset($_FILES["photo6"]) && $_FILES["photo6"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo6"]["name"];
        $filetype = $_FILES["photo6"]["type"];
        $filesize = $_FILES["photo6"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location7="uploads/" . $filename;
            if(file_exists($location7)){

                $location7Err = "Error:" .$location7 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo6"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location7Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location7Err = "Error:  Uploading Failed ";
    }


    if(isset($_FILES["photo7"]) && $_FILES["photo7"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo7"]["name"];
        $filetype = $_FILES["photo7"]["type"];
        $filesize = $_FILES["photo7"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location8="uploads/" . $filename;
            if(file_exists($location8)){

                $location8Err = "Error:" .$location8 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo7"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location8Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location8Err = "Error:  Uploading Failed ";
    }


    if(isset($_FILES["photo8"]) && $_FILES["photo8"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo8"]["name"];
        $filetype = $_FILES["photo8"]["type"];
        $filesize = $_FILES["photo8"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location9="uploads/" . $filename;
            if(file_exists($location9)){

                $location9Err = "Error:" .$location9 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo8"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location9Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location9Err = "Error:  Uploading Failed ";
    }

    if(isset($_FILES["photo9"]) && $_FILES["photo9"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo9"]["name"];
        $filetype = $_FILES["photo9"]["type"];
        $filesize = $_FILES["photo9"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location10="uploads/" . $filename;
            if(file_exists($location10)){

                $location10Err = "Error:" .$location10 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo9"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location10Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location10Err = "Error:  Uploading Failed ";
    }




    if(isset($_FILES["photo10"]) && $_FILES["photo10"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo10"]["name"];
        $filetype = $_FILES["photo10"]["type"];
        $filesize = $_FILES["photo10"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location11="uploads/" . $filename;
            if(file_exists($location11)){

                $location11Err = "Error:" .$location11 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo10"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location11Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location11Err = "Error:  Uploading Failed ";
    }



    if(isset($_FILES["photo11"]) && $_FILES["photo11"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo11"]["name"];
        $filetype = $_FILES["photo11"]["type"];
        $filesize = $_FILES["photo11"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            $location12="uploads/" . $filename;
            if(file_exists($location12)){

                $location12Err = "Error:" .$location12 . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo11"]["tmp_name"], "uploads/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            $location12Err = "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        $location12Err = "Error:  Uploading Failed ";
    }


     $vehiclename = mysqli_escape_string($conn, $vehiclename);
	 $category = mysqli_escape_string($conn, $category);
	 $year = mysqli_escape_string($conn, $year);
	 $price = mysqli_escape_string($conn, $price);
	 $vin = mysqli_escape_string($conn, $vin);
	 $engine = mysqli_escape_string($conn, $engine);
	 $transmission = mysqli_escape_string($conn, $transmission);
	 $mileage = mysqli_escape_string($conn, $mileage);
	 $veh_condition = mysqli_escape_string($conn, $veh_condition);
	 $fuel = mysqli_escape_string($conn, $fuel);
	 $interior = mysqli_escape_string($conn, $interior);
	 $exterior = mysqli_escape_string($conn, $exterior);
	 $comment = mysqli_escape_string($conn, $comment);


	 if ( !$vehiclenameErr && !$categoryErr && !$yearErr && !$priceErr && !$vinErr && !$engineErr && !$transmissionErr && !$mileageErr && !$veh_conditionErr && !$fuelErr && !$interiorErr && !$exteriorErr && !$commentErr ){


	 	$query = "INSERT INTO `vehicles`( `category`, `vehicle_name`, `year`, `price`, `transmission`, `mileage`,`vin_no`, `engine`, `fuel`, `conditions`, `interior`, `exterior`,`specifications`, `main_photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `photo7`, `photo8`, `photo9`, `photo10`, `photo11`, `timeposted`)
        VALUES ('$category', '$vehiclename', '$year','$price', '$transmission', '$mileage', '$vin', '$engine', '$fuel', '$veh_condition', '$interior', '$exterior', '$comment', '$location5', '$location1', '$location2', '$location3', '$location4', '$location6', '$location7', '$location8', '$location9', '$location10', '$location11', '$location12',  NOW())";

         if (mysqli_query($conn, $query)) {?>
        	<div class="alert alert-success alert-dismissible">
			  <p class="text-center w3-large text-white">Notice: Your Upload is Successful...</p> 
			  <a class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
			</div>

       <?php } else {
        	echo "Error: " . $query . "<br>" . mysqli_error($conn);
  
        }
	 }


}



























mysqli_close($conn);
?>