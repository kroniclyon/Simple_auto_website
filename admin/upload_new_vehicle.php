<?php include 'login_check.php'?>  
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
<title>Upload New Vehicle</title>
</head>
<style>

body {
  margin: 0;
  font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
form input[type=text], form select, option {
  padding: 5px;
  font-size: 17px;
  border: 1px solid grey;
  width: 80%;
  background: #f1f1f1;
}
.image-upload>input {
  display: none;
}
#comments{
  width: 80%;
  height: 100px;
  font-size: 17px;
  border: 1px solid grey;
  background: #f1f1f1;
}

</style>
<body>
  <header>
    <?php include "admin_header.php" ?>
  </header>
<br>
<article class="container">
  <h3 class="w3-large w3-text-white text-center jumbotron bg-info">Upload New Vehicle </h3><br><br>
  <div class="rows">
  <form method="post" action="" enctype="multipart/form-data">
    <?php include "upload_processor.php"; ?>

    <h2>Vehicle Information</h2><br>

    <div class="form-group col-sm-6">
      <select class="" id="category" name="category" required>
                            <option value="<?php if (isset($category)){echo $category;}?>">Choose a Category</option>
                             <option value="Trucks">Trucks</option>
                             <option value="Cars">Cars</option>
                             <option value="Motorcycles">Motorcycles</option>
                             <option value="Power Generators Plants">Power Generators Plants</option>
                             
     </select>
     <span style="font-size: 12px;" class="w3-text-red">* </span>
    </div>

    <div class="col-sm-6 form-group">
   <input class="form-group" type="text"  name="vehiclename" " placeholder="Enter Full Name of the Vehicle">
   <span style="font-size: 12px;" class="w3-text-red">* </span>
      
    </div>
    <div class="col-sm-6 form-group">
      <?php
  // set start and end year range
  $yearArray = range(1988, 2020);
  ?>
  <!-- displaying the dropdown list -->
  <select name="year">
      <option value="">Choose Production Year</option>
      <?php
      foreach ($yearArray as $year) {
          // if you want to select a particular year
          $selected = ($year) ? 'selected' : '';
          echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
      }
      ?>
</select>
    </div>
   <div class="col-sm-6 form-group">
   <input class="form-group" type="text"  name="price" " placeholder="Enter Price of Vehicle">
   <span style="font-size: 12px;" class="w3-text-red">* </span>
      
    </div>
    <div class="col-sm-6 form-group">
   <input class="form-group" type="text"  name="vin" " placeholder="Enter Vin Number">
   <span style="font-size: 12px;" class="w3-text-red">* </span>
      
    </div>
    <div class="col-sm-6 form-group">
   <input class="form-group" type="text"  name="engine" " placeholder="Enter Engine Type">
   <span style="font-size: 12px;" class="w3-text-red">* </span>
      
    </div>
    <div class="col-sm-6 form-group">
   <input class="form-group" type="text"  name="transmission" " placeholder="Enter Transmission Info">
   <span style="font-size: 12px;" class="w3-text-red">* </span>
      
    </div>
    <div class="col-sm-6 form-group">
   <input class="form-group" type="text"  name="mileage" " placeholder="Enter Mileage Info">
   <span style="font-size: 12px;" class="w3-text-red">* </span>
      
    </div>
    <div class="form-group col-sm-6">
      <select class="" id="veh_condition" name="veh_condition" required>
                            <option value="<?php if (isset($veh_condition)){echo $vehiclename;}?>">Choose Condition of Vehicle</option>
                             <option value="New">New</option>
                             <option value="Used">Used</option>
                             
     </select>
     <span style="font-size: 12px;" class="w3-text-red">* </span>
    </div>
    <div class="form-group col-sm-6">
      <select class="" id="fuel" name="fuel" required>
                            <option value="<?php if (isset($fuel)){echo $fuel;}?>">Choose Fuel Type</option>
                             <option value="Gasoline">Gasoline</option>
                             <option value="Fuel">Fuel</option>
                             
     </select>
     <span style="font-size: 12px;" class="w3-text-red">* </span>
    </div>
    <div class="col-sm-6 form-group">
   <input class="form-group" type="text"  name="interior" " placeholder="Enter Interior Color">
   <span style="font-size: 12px;" class="w3-text-red">* </span>
      
    </div>
    <div class="col-sm-6 form-group">
   <input class="form-group" type="text"  name="exterior" " placeholder="Enter Exterior Colors">
   <span style="font-size: 12px;" class="w3-text-red">* </span>
      
    </div>
    <div class="col-sm-12">
    <textarea class="" id="comments" name="comment" placeholder="Additional Description of Vehicle" ></textarea>
   </div><br><br>
<br>
    <div class="image-upload ">
      <h3>Enter Main Photo:</h3>
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="main_photo" />
  </div><br>
  <h2>Enter More Photos:</h2>
  <div class="image-upload col-sm-3">
      
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo1" />
  </div>
  <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo2" />
  </div>
  <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo3" />
  </div>
  <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo4" />
  </div>
    <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo5" />
  </div>
    <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo6" />
  </div>
    <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo7" />
  </div>
    <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo8" />
  </div>
    <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo9" />
  </div>
    <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo10" />
  </div>
    <div class="image-upload col-sm-3">
  <label for="file-input">
    <img src="https://icon-library.net/images/upload-photo-icon/upload-photo-icon-21.jpg"/>
  </label>

  <input id="file-input" type="file" name="photo11" />
  </div>
  <div><br><br>
    <button style="font-size: 17px; margin-top: 10px; " type="submit" name="upload" class="btn btn-lg btn-primary btn-block"> Upload New Vehicle</button>
   </div>
  <br><br>
  
  

    
  </form>
  <br><br><br><br><br><br>
</div>  
</article>

<footer>
  <?php include "admin_footer.php"?>
</footer>

	
</body>
</html>