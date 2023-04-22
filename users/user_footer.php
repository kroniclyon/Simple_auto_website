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
  color: black;
  font-size: 16px;
}
footer{
  background: url(../images/footer_bg.jpg);
  color: white;
}
#footer_left{
  padding: 5px;
  margin:5px;
  margin-right: 10px;
  margin-top: 65px;
  text-align: center;
  
}
.footer-links a{
  font-size: 16px;
  text-decoration: none;
  color: black;
  text-align: center;
  text-decoration: none;
  margin: 2px;

}
.footer-links a:hover {
  color: blue;
  text-decoration: underline;
}
#footer-center{
  margin-top: 70px;
  text-align: center;


}
.footer-right{
  margin-top: 50px;
  text-align: center;
}
.footer-icons, #footer-center i{
  font-size: 30px;
}




</style>
<body>
  <hr>
   <footer class="container-fluid bg-light-grey">
    <div class="rows">
     <div id="footer_left" class="col-sm-4">
        <h3>About<span> AutosCanada </span></h3><br>


        <p class="footer-links">
          <a href="../privacy.php"><b>Privacy Policy</b></a>
          <br>
          <a href="#"><b>Shipping</b></a>
          <br>
          <a href="../terms_of_use.php"><b>Terms of Use</b></a>
          <br>
          <a href="#"><b>Shipment Tracking</b></a>
          <br>
          <a href="#"><b>Frequently Asked Questions</b></a>
        </p>

        <p class=" w3-text-white">&copy Copyright AutosCanada.org <?php echo date ("Y")?></p>
      </div>
       
     </div>
     <div id="footer-center" class="col-sm-4 ">
      <div>
          <i class="fa fa-map-marker w3-text-deep-orange"></i>
            <span>200 - 15511 123 Ave NW<br>
             Edmonton, AB<br>
             T5V 0C3</span>


        </div><br>

        <div>
          <i class="fa fa-phone w3-text-blue"></i>
          <span>+91 22-27782183 <br> +91 22-27782183</span><br>
        
        </div><br>
        <div>
          <i class="fa fa-envelope w3-text-light-green"></i>
          <p><a href="mailto:admin@autoscanada.org">admin@autoscanada.org</a></p>
        </div>
       
     </div>
     <div class="footer-right">
      <p class="footer-company-about">
        <img class="img-circle" src="../images/autoscanada1.jpg" width="120px" height="70px" style="margin-bottom:5px;";>
          <h2 class="text-danger">About The Company</h2>
          <p>AutosCanada is Canada's largest multi-location automobile dealership group by volume, currently operating 54 franchised dealerships, comprised of 62 franchises, in eight provinces and has over 3,500 employees</p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook w3-text-blue"></i></a>
          <a href="#"><i class="fa fa-instagram w3-text-pink"></i></a>
          <a href="#"><i class="fa fa-whatsapp w3-text-light-green"></i></a>

        </div>
       
     </div>
      
    </div>
     
   </footer>
	
</body>
</html>