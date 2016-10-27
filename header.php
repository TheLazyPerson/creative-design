<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>I.H.R.S</title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="js/vegas.min.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  
  <!--font Awosom-->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="style/custmoziedIconCss.css.css"> -->
  <link rel="stylesheet" href="style/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!--top line start here -->
    <div class="header" >
      <div id="top-line" ><!--id for top line-->
        <div class="container"><!--container start here-->
          <div class="row topLineText smCenter" >
              <div class="col-sm-4">
                <i class="fa fa-tags"></i> Offers
                  <span  class="topNameplateText">Name Plate Design</span>
              </div>
              <div class="col-sm-8"> 
                <div class="col-sm-6"> 
                  <i class="fa fa-whatsapp"></i> +91 8087676981 (10.00am to 7.00pm Mon-Sat)
                </div>
                <div class="col-sm-6">
                    <a class="whiteColor" href="testimonial.php"><i class="fa fa-comments"></i> Testimonials &nbsp</a>
                    <i class="fa fa-map-marker"></i> Locate Us &nbsp
                    <!-- Button trigger modal -->
                    <a class="whiteColor" data-toggle="modal" data-target="#myModal"><i class="fa fa-key"></i> Login/Register &nbsp</a>
                </div>
              </div>      
          </div>
        </div><!-- container end here-->  
      </div><!--id for top line end here-->

      <!--login model start --> 
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
          </div>
          <div class="modal-body">
           <h4>Your Email*</h4>
                  <input type="text" class="form-control padding20" id="exampleInputEmail1">
                <h4>Your Password*</h4>
                  <input type="text" class="form-control padding20" id="exampleInputEmail1">
          </div>
          <div class="modal-footer">
            <div class="col-sm-12">
              <a  data-toggle="modal" data-dismiss="modal" data-target="#myModal1"><p><h4 class="black">Register Here</h4></p></a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <!--login model end --> 

    <!--register model start --> 
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="flase">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
          </div>
          <div class="modal-body">
                <div class="col-sm-6 noPadding">
                    <h4>First Name</h4>
                    <input type="text" class="form-control padding20" id="exampleInputEmail1">
                  </div>
                  <div class="col-sm-6 noPadding">
                    <h4>Last Name</h4>
                    <input type="text" class="form-control padding20" id="exampleInputEmail1">
                  </div>
                  <div class="col-sm-6 noPadding">
                    <h4>Email Address</h4>
                    <input type="text" class="form-control padding20" id="exampleInputEmail1">
                  </div>
                  <div class="col-sm-6 noPadding">
                    <h4>Phone</h4>
                    <input type="text" class="form-control padding20" id="exampleInputEmail1">
                  </div>

                  <div class="col-sm-12 noPadding">
                    <h4>Town/City</h4>
                    <input type="text" class="form-control padding20" id="exampleInputEmail1">
                  </div>
          </div>
          <div class="modal-footer">
              
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!--register model end --> 

      <!--it contains logo,navbar,add-to-cart-->
      <div id="navHeader">
        <div class="container"><!--container start here-->
          <div class="row smCenter"><!--nav header starts here-->
              <div  class="col-sm-4 paddingtop40 logo"><h1>Creative Design</h1>
              </div><!--logo ends here here-->
              <div class="col-sm-8">
                <div class="row smCenter">
                  <div class="col-sm-12"><!--cart starts here --> 
                    <ul style="list-style:none;" class="topCartNav navbar-right">
                      <li class="hrLine">
                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="cart.php" class="cartContents"> ₹ &nbsp 350.00 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li>
                        <div class="form-group">
                          <input type="text" class="form-control input-xs" style="width:100px;" placeholder=" Search">
                        </div>
                      </li>  
                    </ul>   
                </div><!--cart ends here-->
              </div>
              
              <div class="row smCenter"><!--navbar starts here-->
                <nav role="navigation" class="navbar navbar-default">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header" style="background: #fff;">
                      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      
                  </div>
                  <!-- Collection of nav links and other content for toggling -->
                  <div id="navbarCollapse" class="collapse navbar-collapse" style="padding-bottom:10px;">
                      <ul class="nav navbar-nav navbar-right">
                          <li class="active"><a href="index.php">HOME</a></li>
                          <li><a href="product.php">PRODUCTS</a></li>
                          <li><a href="about.php">ABOUT US</a></li>
                          <li><a href="franchise.php">FRANCHISE</a></li>
                          <li><a href="stores.php">STORES</a></li>
                          <li><a href="contactUs.php">CONTACT US</a></li>
                          <li><a href="blog.php">BLOGS</a></li>
                          <li><a href="#">SITE MAP</a></li>
                      </ul>
                  </div>
                </nav>
              </div><!--navbar ends here-->
            </div><!-- cart and navbavr ends here-->
          </div><!--nav header ends here-->
        </div><!--container ends here--> 
      </div>



    </div><!--header ends here-->
    <!-- top line ends here -->

