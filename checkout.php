
<?php include "header.php" ?>

	<div class="container margintop50">	<!--starting of product grid -->

		<form role="form" action="processOrder.php" method="POST">
		<div class="row marginbottom50" ><!--starting of product main row -->
			

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
		        				<input type="text" placeholder="First Name" class="form-control padding20" id="checkout-first-name" name="firstname" required>
		        			</div>
		        			<div class="col-sm-6 noPadding">
		        				<h4>Last Name*</h4>
		        				<input type="text" placeholder="Last Name" class="form-control padding20" id="checkout-last-name" name="lastname" required>
		        			</div>
		        			<div class="col-sm-6 noPadding">
		        				<h4>Email Address*</h4>
		        				<input type="text" placeholder="Email Address" class="form-control padding20" id="checkout-email" name="email" required>
		        			</div>
		        			<div class="col-sm-6 noPadding">
		        				<h4>Phone*</h4>
		        				<input type="text" placeholder="Phone Number" name="phone" class="form-control padding20" id="checkout-phone" required>
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