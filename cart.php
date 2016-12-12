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
  
<section class="container margintop40 marginbottom20" >
	<div class="row">
  		<table class="table table-bordered">
  			<thead class="thead-default">
  			<td class="col-md-1 black thead-default"></td>
		      <td class="col-md-1 black"></td>
		      <td class="col-md-3 black">Product</td>
		      <td class="col-md-2 black">Price</td>
		      <td class="col-md-3 black">Quantity</td>
		      <td class="col-md-2 black">Total</td>
  			</thead>
		  <tbody>
		    <tr>
		      <td class="col-md-1 black">
		      	<a href="#">
		      		<i class="fa fa-times" aria-hidden="true"></i>
		      	</a>
		      </td>
		      <td class="col-md-1 black">
		      	<img src="images/block1.jpg" class="img-responsive"   >
		      </td>
		      <td class="col-md-3 black">
		      	Wooden Laser Cutting Earring 3
		      </td>
		      <td class="col-md-2 black">
		      	₹ 175.00
		      </td>
		      <td class="col-md-3 black">
		      	<div class="quantity ">
						<input type="number" class="form-control productCount" value="1" id="exampleInputName2" placeholder=" ">
					</div>
		      </td>
		      <td class="col-md-2 black">
		      	₹ 175.00
		      </td>
		    </tr>
		    			   
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
							<td class="col-md-6">₹ 175.00</td>
						</tr>
						<tr>	
							<td class="col-md-6 black thead-default">Total</td>
							<td class="col-md-6 black">₹ 175.00</td>

						</tr>	
				</table>
					<div class="paddingbottom20">
						<a href="checkout.php">
							<button type="button" class="btn btn-info text-center ">Proceed to Checkout</button>
						</a>	
					</div>	
			</div>
		</div>
	</div>	
</section>	
  
<?php include "footer.php" ?>