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
<title></title>
</head>
<style>

body {
  margin: 0;
  font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
header{
      background: url(../images/footer_bg.jpg);
}

.topnav {
  overflow: hidden;
}

.topnav a {
  float: right;
  display: block;
  color: white;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
  font-size: 12px;
  margin: 2px;

}

.topnav a:hover {
  background-color: cornflowerblue;
  color: white;
  text-decoration: none;
}

.topnav a.active {
  background-color: grey;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 70%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 15%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

</style>
<body>
      <header class="container-fluid  bg-light">
            <div class="rows">
                  <div class="col-sm-4">
                  <a href="#"><img class="img-circle" src="../images/autoscanada2.jpg" width="200px" height="140px" style="margin-bottom:5px; margin-top: 30px;";></a>

            

</div>
</div>
<div class="col-sm-8">
<div>

<form class="example" action="#"><br>
  <input type="text" placeholder="Toyota Camry 2010 Model" name="search">
  <button type="submit"><i class="fa fa-search"></i></button><br>
</form>

</div><br>
         
<div class="topnav " id="myTopnav">
  <a class="btn btn-outline-info" href="#">Buy Vehicles</a>
  <a class="btn btn-outline-info" href="#">Search</a>
  <a class="btn btn-outline-info" href="#">View Shipping Information</a>
  <a class="btn btn-outline-info" href="#">Payment Details</a>
  <a class="btn btn-outline-info" href="#">Track Shipment</a>
  <a class="btn btn-outline-info" href="#">How To Buy</a>
  <a class="btn btn-outline-info" href="#">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
      </header><br>

	
</body>
</html>