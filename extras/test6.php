<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Bootstrap -->
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<style>
/* Collapsing Navbar Styles */

@media(min-width:768px) {
  .navbar-default {
    -webkit-transition: all .35s;
    -moz-transition: all .35s;
    transition: all .35s;
    padding: 15px 0;
    /* Add additional styles here for the UNCOLLAPSED state */
  }
  .navbar-default.affix {
    padding: 0;
    /* Add additional styles here for the COLLAPSED state */
  }
}


/* Header Styles for Demo */

header {
  padding: 300px;
  text-align: center;
  background-image: url(https://unsplash.it/800?image=974
);
  background-position: center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}

header h1 {
  color: white;
  font-size: 2em;
}
</style>
<body>
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	  <div id="top-line" ><!--id for top line-->
        <div class="container"><!--container start here-->
          <div class="row topLineText " >
              <div class="col-sm-2 col-xs-12">
                <a href="offers.php " class="whiteColor">
                  <i class="fa fa-tags"></i> Offers</a>
                  <!-- <span  class="topNameplateText">Name Plate Design</span> -->
              </div>
              <div class="col-sm-5 smRight">
                <img src="images/Phone.png" style="height:18px" >  +91 8087676981 (10.00am to 7.00pm Mon-Sat)
              </div>
              <div class="col-sm-5 col-xs-12 smRight"> 
                <a class="whiteColor" href="testimonial.php"><img src="images/Message.png" style="height:18px" >  Testimonials &nbsp</a>
                <a href="contactUs.php" class="whiteColor">
                  <img src="images/Location.png" style="height:18px" > Locate Us &nbsp</a>
                    <!-- Button trigger modal -->
                  <a class="whiteColor" data-toggle="modal" data-target="#myModal"><img src="images/Key.png" style="height:18px" > Login/Register &nbsp</a>
              </div>      
          </div>
        </div><!-- container end here-->  
      </div><!--id for top line end here-->
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Start Bootstrap</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">Portfolio</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>

<!-- Demo Header -->
<header>
  <h1>Bootstrap Collapsing Animated Navigation</h1>
</header>

ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</body>
</html>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  <script src="./js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){       
   
    

    // Initialize affix and add an offset to add affix class on scroll
$('#mainNav').affix({
  offset: {
    top: 100
  }
})
});
</script>