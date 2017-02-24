<?php include "header.php" ?>


 <!-- name plate heading with color-->
    <section id="headingContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>Cart</h1>
          </div>
          
        </div>
      </div><!-- Heading Content ends here-->
    </section>
<!--end of name plate heading with color-->

<section  class="margintop40">
  <div class="container">
  <table id="cart" class="table table-hover table-condensed">
      <thead>
        <tr>
          <td><a href="product.php" class="btn btn-warning"><i class="fa fa-angle-left" style="color:white;"></i> Continue Shopping</a></td>
          <td colspan="2" class="hidden-xs"></td>

        </tr>
        <tr></tr>
        <tr>
          <th style="width:50%">Product</th>
          <th style="width:10%">Price</th>
          <th style="width:8%">Quantity</th>
          <th style="width:22%" class="text-center">Subtotal</th>
          <th style="width:10%"></th>
        </tr>
      </thead>
      <tbody id="cart-products-go-here">
        
      </tbody>
      
    </table>
  </div>

</section>


<section class="container faintgrey marginbottom40" >
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
							<button type="button" class="btn btn-info text-center ">Proceed to Checkout</button>
						</a>	
					</div>	
			</div>
		</div>
	</div>	
</section>	
  
<?php include "footer.php" ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  <script src="./js/bootstrap.min.js"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <script src="js/bootstrap-spinner.js"></script>
    <script src="js/common.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){

      var rootUrl = 'http://localhost/work/api/public/';
      var imageUrl = 'http://localhost/work/api/public/';
      $(".nav-tabs a").click(function(){
          $(this).tab('show');
      });
        
        $(".dropdown").hover(            
          function() {
              $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
              $(this).toggleClass('open');        
          },
          function() {
              $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
              $(this).toggleClass('open');       
          }
      );
       
       $('.spinner').spinner({
          min: 1,
          max: 10
        });
        
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('.back-to-top').click(function () {
            $('.back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        


        $('#back-to-top').tooltip('show');
        loadCart();
        function loadCart(){
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
                    html += '<tr> <td data-th="Product"> <div class="row"> <div class="col-sm-4 hidden-xs"><img height="200px" width="250px" src="'+ imageUrl+productImage+'" alt="'+productName+'" class="img-responsive"/></div><div class="col-sm-8"> <h4 class="nomargin ">'+productName+'</h4> <p>'+productDescription+'</p></div></div></td><td data-th="Price">₹ '+productPrice+'</td><td data-th="Quantity"> <div class="input-group" style="width: 120px;"> <span class="input-group-btn"> <button type="button" class="btn btn-default" data-value="decrease" data-target="#spinner" data-toggle="spinner"> <span class="glyphicon glyphicon-minus"></span> </button> </span> <input type="text" data-ride="spinner" id="spinner" class="form-control text-center input-number" value="'+productQuanitity+'"> <span class="input-group-btn"> <button type="button" class="btn btn-default" data-value="increase" data-target="#spinner" data-toggle="spinner"> <span class="glyphicon glyphicon-plus"></span> </button> </span> </div></td><td data-th="Subtotal" class="text-center">₹ '+productSubtotal+'</td><td class="actions" data-th=""> <button class="btn btn-danger btn-sm remove-cart-product" id="'+productId+'" data-product-type="'+productType+'"><i class="fa fa-trash-o" style="color:white;" ></i></button> </td></tr>';

                });
                

                $("#cart-page-subtotal").text(total);
                $("#cart-page-total").text(total);
                $("#cart-products-go-here").html(html);
              },
              error: function(xhr, resp, text) {
                  console.log(xhr, resp, text);
              }
          }).done(function(){
                $(".remove-cart-product").click(function(e){
              var button = $(e.relatedTarget);
              e.preventDefault();
              var id = this.id;  
              var type = $(this).data('product-type');
              removeFromCart(id,type);
              loadBasicCart();
              loadCart();
            }); 
          });
        }
 }); 
</script>