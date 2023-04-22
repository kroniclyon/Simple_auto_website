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
<title>Contact Us</title>
</head>
<style>

body {
  margin: 0;
  font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
  color: black;
  font-size: 16px;

}
textarea {
  width: 100%;
  height: 250px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
iframe{
  text-align: center;
  width: 100%;
  
}

</style>
<body>
<header>
  <?php include "home_header.php" ?>
</header>
<div class="container"><br>
  <h1 class="jumbotron"><b>Contact The Company</b></h1>
  <div class="rows">
    <div class="col-sm-8"><br><br>
      <p>As we strive to be the best in the industry and the number one in customer service, we are always looking for ways to help us improve. Please let us know about your experience with our company.</p><br>
      <div class="col-sm-5">
      <h2 style="color:rgb(60, 60, 60);">Our Head Office is located at:</b></h2>
      <i style="color:rgb(60, 60, 60);" class="font-weight-bold">200 - 15511 123 Ave<br> NW Edmonton, <br>
      AB T5V 0C3</i><br><br>
      <p><i style="" class="fa fa-phone w3-text-black font-weight-bold"></i> (780) 447-0651</p>
      <p>For vehicle sales and service, please contact the sales department</p>
      <p>You may contact our legal team, <a href="#">legal@autocan.ca.</a></p>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width:180px; margin-left: 140px;">
        <img class="card-img-top" src="images/executive.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Executive Assistant, <br>Camille McCrindle</h4>
        </div>
      </div>

    </div><br>
    <br>



      
    </div><br><br>
    <div style="border: 5px dashed grey;" class="col-sm-4"><br><br>
      <h1 style="color:rgb(140, 140, 140);">Contact Us <i style="color: rgb(140, 140, 140);" class="fa fa-phone-square  font-weight-bold pull-right"></i></h1><br>
      <p style="color:rgb(60, 60, 60);">200 15511 123 Ave NW <br>Edmonton, AB, T5V0C3</p>
      <br>
      
      <i class="fa fa-envelope w3-text-black font-weight-bold"></i><a style="text-decoration: none; color: red;" href="#"> Email Us</a>
      <br>
      <hr style="color:rgb(140, 140, 140)">
      <br>
      <h1 style="color:rgb(140, 140, 140);">Hours of Operation: <i style="color: rgb(140, 140, 140);" class="far fa-clock font-weight-bold pull-right"></i></h1><br>
      <p><li style="list-style-type: circle; color: green;"><b>MON-FRI: </b> 8:00am - 6:00pm</li> </p>
      <p><li style="list-style-type: circle; color: red;"><b>SAT-SUN: </b> Closed</li></p>

      <hr style="color:rgb(140, 140, 140) border: 2px;">

      
    </div>
    
  </div>
  
</div>
    <div class="container"><br><br>
      <form method="" action="">
        <div class=" col-sm-6 form-group">
          <label style="color: rgb(140, 140, 140);" for="fname">Full Name:*</label>
          <input style="font-size: 14px;background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="text"  id="email" placeholder="John Doe">
        </div>
        <div class="col-sm-4 form-group">
          <label style="color: rgb(140, 140, 140);" for="sel1">What are you inquiring About?*</label>
          <select style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg " id="sel1">
            <option>General</option>
            <option>Payment</option>
            <option>Legal</option>
            <option>Services</option>
          </select>
        </div>
        <div class=" col-sm-4 form-group">
          <label style="color: rgb(140, 140, 140);" for="email">Email:*</label>
          <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="email"  id="email" placeholder="jane@gmail.com">
        </div>
        <div class=" col-sm-6 form-group">
          <label style="color: rgb(140, 140, 140);" for="phone">Phone Number:*</label>
          <input style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg input-lg" type="text"  id="email" placeholder="(123) 456-7890">
        </div>
        <div class="col-sm-5 form-group">
          <label style="color: rgb(140, 140, 140);" for="sel1">Preferred Contact Method:*</label>
          <select style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg " id="sel1">
            <option>text</option>
            <option>call</option>
            <option>Email</option>
          </select>
        </div>
        <div class="col-sm-5 form-group">
          <label style="color: rgb(140, 140, 140);" for="sel1">Best Time to Call? </label>
          <select style="font-size: 14px; background-color: #f8f8f8;" class="form-control form-control-lg" id="sel1">
            <option>Anytime</option>
            <option>Morning</option>
            <option>Afternoon</option>
            <option>Evening</option>
          </select>
        </div>
        <div class="form-group col-sm-10">
          <label style="color: rgb(140, 140, 140);" for="sel1">Message:</label>
          <textarea>Some text.......</textarea>
          
        </div><br>
        <div class="form-group col-sm-10">
          <label class="w3-large w3-text-red" for="vehicle1"><input style="font-size: 14px; color: #f8f8f8;" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
           I agree to receive periodical offers, newsletter, safety and recall updates from the dealership. Consent can be withdrawn at any time.</label><br>
        </div>
       <div class="form-group col-sm-10">
        <button style="font-size: 16px;" type="submit" class="btn btn-lg btn-info">Send</button>
      </div>

      </form>
      
    </div>
    <br>
    <h3 class="jumbotron text-center bg-danger">We are Conveniently at: <b class="w3-text-white"> 200 - 15511 123 Ave NW Edmonton, AB T5V 0C3</b></h3>
<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2368.914036573352!2d-113.59159158449356!3d53.577150780028035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a021526724eb25%3A0xe9d0804a2a1fe9!2s15511%20123%20Ave%20NW%2C%20Edmonton%2C%20AB%20T5V%200C3%2C%20Canada!5e0!3m2!1sen!2sng!4v1600438987121!5m2!1sen!2sng" width="800" height="500" frameborder="0" style="border:"0";" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<footer>
  <?php include "home_footer.php" ?>
</footer>

	
</body>
</html>