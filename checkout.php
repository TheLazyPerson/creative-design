<?php
	
	$MERCHANT_KEY = "QMBLy9";
	$SALT = "Cwrcpi9m";
	$PAYU_BASE_URL = "https://secure.payu.in";
	$action = '';
	$posted = array();
	if(!empty($_POST)) {
	    //print_r($_POST);
	  foreach($_POST as $key => $value) {    
	    $posted[$key] = $value; 
		
	  }
	}

	$formError = 0;
	if(empty($posted['txnid'])) {
	  // Generate random transaction id
	  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	} else {
	  $txnid = $posted['txnid'];
	}
	$hash = '';
	// Hash Sequence
	$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

	if(empty($posted['hash']) && sizeof($posted) > 0) {
	  if(empty($posted['key'])
	          || empty($posted['txnid'])
	          || empty($posted['amount'])
	          || empty($posted['firstname'])
	          || empty($posted['email'])
	          || empty($posted['phone'])
	          || empty($posted['productinfo'])
	          || empty($posted['surl'])
	          || empty($posted['furl'])
			  || empty($posted['service_provider'])
	  ) {
	    $formError = 1;
	  } else {
	    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
		$hashVarsSeq = explode('|', $hashSequence);
	    $hash_string = '';	
		foreach($hashVarsSeq as $hash_var) {
	      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
	      $hash_string .= '|';
	    }

	    $hash_string .= $SALT;


	    $hash = strtolower(hash('sha512', $hash_string));
	    $action = $PAYU_BASE_URL . '/_payment';
	  }
	} elseif(!empty($posted['hash'])) {
	  $hash = $posted['hash'];
	  $action = $PAYU_BASE_URL . '/_payment';
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kalakruti | Best Platform in India to buy Nameplates</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css" > -->
    
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="js/vegas.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
     
    <link rel="stylesheet" type="text/css" href="css/bootstrap-rating.css">
    <!--font Awosom-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    <link href="css/jquery-ui.min.css" rel="stylesheet" media="all">
    <link href="css/jquery-ui-slider.min.css" rel="stylesheet" media="all">
    <!-- animate css-->
    <link rel="stylesheet" href="css/animate.css">
    <!-- animate hover css-->
    <link href="css/hover.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="style/blog.css"><!-- 
    <link rel="stylesheet" href="style/slider.css"> -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="css/bootstrap-formhelpers.min.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
  	<script>
	    var hash = '<?php echo $hash ?>';
	    function submitPayuForm() {
	      if(hash == '') {
	        return;
	      }
	      var payuForm = document.forms.payuForm;
	      payuForm.submit();
	    }
	  </script>
  </head>
  <body onload="submitPayuForm()">

    <!--top line start here -->
    <div class="header ">
      <div id="top-line" style="" ><!--id for top line-->
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
                <a class="whiteColor" href="testimonial.php"><img src="images/Message.png" style="height:18px" >  Testimonials &nbsp;</a>
                <a href="contactUs.php" class="whiteColor">
                  <img src="images/Location.png" style="height:18px" > Locate Us &nbsp;</a>
                    <!-- Button trigger modal data-toggle="modal" data-target="#myModal" -->
                  <a href="login.php" id="user-not-logged-in" class="whiteColor" ><img src="images/Key.png" style="height:18px" > Login/Register &nbsp;</a>
                  <a href="dashboard.php" class="whiteColor hidden" id="user-logged-in" class="whiteColor" ><span class="glyphicon glyphicon-user"></span> <span id="username-goes-here"> Username</span> &nbsp;</a>
                  
              </div>      
          </div>
        </div><!-- container end here-->  
      </div><!--id for top line end here-->


      <!--it contains logo,navbar,add-to-cart-->
      <div id="navHeader" >
        <div class="container"><!--container start here-->
          <div class="row "><!--nav header starts here-->
              <div  class="col-sm-4 paddingtop5  logo">
                <a href="index.php">
                  <!-- <h1>Ghar Konacha</h1> -->
                  <img src="images/logo1.png" class="img-responsive" style="height:110px">
                </a>  
              </div><!--logo ends here here-->
              <div class="col-sm-8"><!-- cart and nav linke starts here-->
                <div class="row  ">
                  <div class="col-sm-12  listStyle "><!--cart starts here -->
                    <div class="pull-right ulBottomMargin"> 
                      <ul class="pull-left paddingright20 paddingtop10 ">
                        
                          <a href="cart.php" class="cartContents ">
                             ₹<span class="cart-total"> </span>  &nbsp; <span class="cart-item-count"></span> Items <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                           </a>
                            
                      </ul>
                      <ul class="pull-left paddingtop10 " style="paddin-bottom:0px;">
                        <li>
                          <div class="form-group">
                            <input type="text" class="form-control input-xs" style="width:200px;" placeholder=" Search">
                          </div>
                        </li>  
                      </ul>   
                  </div>
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
                      <ul class="nav navbar-nav navbar-right" id="mainNavigation">
                          <li ><a href="index.php">HOME</a></li>
                          <li class="dropdown">
                            <a href="product.php" >PRODUCTS</a>
                          </li>
                          <li><a href="about.php">ABOUT US</a></li>
                          <li><a href="franchise.php">FRANCHISE</a></li>
                          <li><a href="stores.php">STORES</a></li>
                          <li><a href="contactUs.php">CONTACT US</a></li>
                          <li><a href="blog.php">BLOGS</a></li>
                          <!-- <li><a href="#">SITE MAP</a></li> -->
                      </ul>
                  </div>
                </nav>
              </div><!--navbar ends here-->
            </div> <!-- cart and nav linke starts here>-->
          </div><!--nav header ends here-->
        </div><!--container ends here--> 
      </div>
    </div>


     

	<div class="container margintop50">	<!--starting of product grid -->

		<form role="form" action="<?php echo $action; ?>" name="payuForm" method="POST">
			<div class="row marginbottom50" ><!--starting of product main row -->
			
			<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
			<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
			<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
			<input type="hidden" name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" />
			<div class="col-sm-12" >  

        		<div class="row headingContent" id="homeContent">
          			<div class="col-sm-12">
            			<h1>Checkout</h1>
          			</div>
        		</div>

        		<div class="row paddingtop30">
	        		<div class="col-sm-6">
	        				<h3 class="black">Billing Details</h3>
		        			<div class="col-sm-6 noPadding">
		        				<h4>First Name*</h4>
		        				<input type="text" placeholder="First Name" class="form-control padding20" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>"  required>
		        			</div>
		        			<div class="col-sm-6 noPadding">
		        				<h4>Last Name*</h4>
		        				<input type="text" placeholder="Last Name" class="form-control padding20" id="checkout-last-name" name="lastname" required>
		        			</div>
		        			<div class="col-sm-6 noPadding">
		        				<h4>Email Address*</h4>
		        				<input type="text" placeholder="Email Address" class="form-control padding20"  name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" required>
		        			</div>
		        			<div class="col-sm-6 noPadding">
		        				<h4>Phone*</h4>
		        				<input type="text" placeholder="Phone Number" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" class="form-control padding20" id="checkout-phone" required>
		        			</div>

		        			<div class="col-sm-12 noPadding">
		        				<h4>Address*</h4>
		        				<input type="text" name="address1" class="form-control padding20  marginbottom10" id="checkout-appartment" placeholder="Appartment" required>
		        				<input type="text" name="address2" class="form-control padding20" id="checkout-street-address" placeholder="Street Address " required>
		        				
		        			</div>

		        			<div class="col-sm-12 noPadding">
		        				<h4>Town/City*</h4>
		        				<input type="text" name="city" placeholder="Town/City" class="form-control padding20" id="checkout-city">
		        			</div>

		        			<div class="col-sm-12 noPadding">
		        				<h4>Country*</h4>
		        				
		        				<div class="bfh-selectbox bfh-countries" id="checkout-country" data-country="IN" data-flags="true">
								  <input type="hidden" name="country" value="">
								  <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
								    <span class="bfh-selectbox-option input-medium" data-option=""></span>
								    <b class="caret"></b>
								  </a>
								  <div class="bfh-selectbox-options">
								    <input type="text" class="bfh-selectbox-filter">
								    <div role="listbox">
									    <ul role="option">
									    </ul>
								    </div>
								  </div>
								</div>
		        			</div>

		        			<div class="col-sm-6 noPadding">
		        				<h4>State*</h4>
		        				<div class="bfh-selectbox bfh-states" data-country="checkout-country" data-state="MA">
								  <input type="hidden" name="state" value="">
								  <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
								    <span class="bfh-selectbox-option input-medium" data-option=""></span>
								    <b class="caret"></b>
								  </a>
								  <div class="bfh-selectbox-options">
								  <div role="listbox">
								    <ul role="option">
								    </ul>
								    </div>
								  </div>
								</div>
		        			</div>

		        			<div class="col-sm-6 noPadding">
		        				<h4>Post Code / ZIP*</h4>
		        				<input type="text" name="zipcode" placeholder="Pin/Zip Code" class="form-control " id="checkout-zip-code">
		        				<input type="hidden" name="amount" value="3000">
		        				<input type="hidden" name="productinfo" value="Nameplate/Customized Product">
		        			</div>

	        				
	        		</div>

	        		<div class="col-sm-6">
			    		<div class="panel panel-default">
			    			<div class="panel-heading">
			    				<h3 class="panel-title"><strong>Order Summary</strong></h3>
			    			</div>
			    			<div class="panel-body">
			    				<div class="table-responsive">
			    					<table class="table table-condensed">
			    						<thead>
			                                <tr>
			        							<td><strong>Product</strong></td>
			        							<td class="text-center"><strong>Price</strong></td>
			        							<td class="text-center"><strong>Quantity</strong></td>
			                                </tr>
			    						</thead>
			    						<tbody id="cart-summary-go-here">
			    							
			                                
			    						</tbody>
			    					</table>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
	        		</div>
	        	</div>	
	        	<div class="row ">
					<div class="col-sm-7"></div>
					<div class="col-sm-5 margintop40 " >
						<div class="col-sm-12 marginbottom30 greayBorder">
							<table class="table paddingright20">
								<thead><h3 class="black">Cart Totals</h3></thead>
									<tr>
										<td class="col-md-6 thead-default">Subtotal</td>
										<td class="col-md-6 " >₹ <span id="cart-page-subtotal"></span></td>
									</tr>
									<tr>	
										<td class="col-md-6 black thead-default">Total</td>
										<td class="col-md-6 black">₹ <span id="cart-page-total"></span></td>

									</tr>	
							</table>
							<div class="paddingbottom20 paddingtop30">
								<a href="checkout.php">
									<button type="submit" class="btn btn-info text-center ">Place Order</button>
								</a>	
							</div>	
						</div>
					</div>
				</div>	
    	
 
	        			

			</div>
			</form>
		</div>

		
	</div>			


	<?php include "footer.php" ?>
   	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   	<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  	<script src="js/bootstrap.min.js"></script>
  	<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   	
    <script src="js/common.js"></script>
    <script src="js/bootstrap-formhelpers.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function() {

	    $(".nav-tabs a").click(function() {
	        $(this).tab('show');
	    });

	     $(".dropdown").hover(
	         function() {
	             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
	             $(this).toggleClass('open');
	         },
	         function() {
	             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
	             $(this).toggleClass('open');
	         }
	     );
	     $(".center").slick({
	         slidesToShow: 5,
	         slidesToScroll: 1,
	         autoplay: false,
	         autoplaySpeed: 2000
	     });


	     $(window).scroll(function() {
	         if ($(this).scrollTop() > 50) {
	             $('.back-to-top').fadeIn();
	         } else {
	             $('.back-to-top').fadeOut();
	         }
	     });
	     // scroll body to 0px on click
	     $('.back-to-top').click(function() {
	         $('.back-to-top').tooltip('hide');
	         $('body,html').animate({
	             scrollTop: 0
	         }, 800);
	         return false;
	     });

	     $('#back-to-top').tooltip('show');

	     // $('#myModal2').appendTo("body");


	     $('.collapse').on('shown.bs.collapse', function(e) {
	         $('.collapse').not(this).removeClass('in');
	     });

	     $('[data-toggle=collapse]').click(function(e) {
	         $('[data-toggle=collapse]').parent('li').removeClass('active');
	         $(this).parent('li').toggleClass('active');
	     });
	     loadSummary();
	     function loadSummary(){
	     	 $.ajax({
              url: rootUrl + "cart",
              dataType: "json",
              success : function(result) {
                var data = result['products'];
                var items = result['items'];
                var total = result['total'];
                var html = "";
                var productId = "";
                var productName = "";
                var productDescription = "";
                var productPrice = "";
                var productType = "";
                var productQuanitity = "";
                $.each(data, function (key, value) {
                    productId = data[key]['product_id'];
                    productName = data[key]['product_name'];
                    productDescription = data[key]['product_description'];
                    productPrice = data[key]['product_price'];
                    productType = data[key]['product_type'];
                    productQuanitity = data[key]['product_quantity'];
                    productImage = data[key]['product_image'];
                    productSubtotal = data[key]['subtotal'];
                    html += '<tr><td class="col-md-3"><div class="media"><a class="thumbnail pull-left" href="#"> <img class="media-object" src="'+imageUrl+productImage+'" style="width: 72px; height: 72px;"> </a><div class="media-body"><h4 class="media-heading">'+productName+'</h4></div></div></td><td class="text-center">₹'+productPrice+'</td><td class="text-center">'+productQuanitity+'</td></tr>';

                });
                

                $("#cart-page-subtotal").text(total);
                $("#cart-page-total").text(total);
                $("#cart-summary-go-here").html(html);
              },
              error: function(xhr, resp, text) {
                  console.log(xhr, resp, text);
              }
          	});
	    }
	 });
</script>