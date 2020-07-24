
<?php
extract($_POST);
session_start();

if(isset($_SESSION['Email']))
{
$A=1;
} 
else
{
  header("location:Login_User.php");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="images/hospital.jpg" rel="icon">
  <link href="images/hospital.jpg" rel="apple-touch-icon">

  <title>Blood Bank</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 


</head>

<body>

  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="GoodWill.php">Blood<span>Bank</span></a>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"></a></li>
   
          <li></li>
          <li></li>
          <li></li>
          <li class="btn-trial"><a href="Logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!--/ Navigation bar-->
  
  <!--Pricing-->
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Blood Bank</h2>
          <p>There is no great joy than saving a soul. Donate blood and save a life. A life may depend on a gesture from you, a bottle of blood.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="card wow bounceInUp">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Become a Donor</h4>
              <span class="fa fa-heartbeat" ></span> 
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
             <a href="Donor_Form.php"><button  type="submit" class="btn btn-bg green btn-block">Proceed</button></a>
            </div>
          </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="card wow bounceInUp">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Search for Blood</h4>
              <span class="fa fa-heartbeat"></span> 
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="ChooseBlood.php"><button type="submit" class="btn btn-bg green btn-block" name="sfbbtn">Proceed</button></a>
            </div>
          </div>
        </div>
        </div>

        <div class="col-md-4 col-sm-4">
          <div class="card wow bounceInUp">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Delete my records</h4>
              <span class="fa fa-heartbeat"></span> 
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg red btn-block">Proceed</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  

  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

    
       
        
      <!-- End newsletter-form -->
       
        
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>


