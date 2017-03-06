
<? include "header.php" ?>

  
<style>
#selectable .ui-selecting {border: 1px solid #ccc;}
#selectable .ui-selected {background: #F39814; color: white;}
/*#selectable {margin: 0; padding: 0; height: 300px; position: relative; padding:0; border:solid 1px #DDD;}
#selectable > div {position: absolute; margin: 0; padding:10px; border:solid 1px #CCC; width: 100px;}*/
.ui-selectable-helper {position: absolute; z-index: 100; border:1px dotted black;}  
</style>
<script>
var s = document.createElement('script'); s.setAttribute('src','http://developer.quillpad.in/static/js/quill.js?lang=Marathi&key=84c5be25b0e8fc00c31850da33a48148'); s.setAttribute('id','qpd_script'); s.setAttribute('quillpad','enable|english'); document.head.appendChild(s);
</script>
	<section id="homeContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>Customize Name Plate</h1>
          </div>
        </div>
      </div><!-- Heading Content ends here-->
    </section>

<div class="container accordationPanel " >
	<div class="row " >
		<div class="col-sm-3 noPadding ">
			<div class="card">
				<div class="bs-example  padding10  " id="nameplates-go-here" style="min-height:1250px">
				    
	    		</div>
	    	</div>
		</div>

		<div class="col-sm-6 text-center">
			<div class="row">
				<div class="col-sm-3 nopaddingleft ">
					<div class="card  padding10">
						+91 8087676981 
					</div>
				</div>
				<div class="col-sm-5 nopaddingleft ">
					<div class="card padding10">
						<a href="#" class="trigger-tooltips">How to Design Nameplate ?</a> 
					</div>
				</div>
				<div class="col-sm-4 nopaddingleft">
					<div class="card padding10">
						<a href="#" data-toggle="modal" data-target="#RequestDesignModal">Request Design</a> 
					</div>
				</div>
			</div>	



				<div class="row margintop20 nopaddingleft text-center">
					<div class="col-md-offset-1 col-sm-2 ">
						<a href="#" id="delete-selected-objects">
							<img src="images/style2.jpg" class="img-responsive card" style="height:40px;">
						</a>		
					</div>

					<div class="col-sm-2 ">
						<a href="#" class="horizontalCenter">
							<img src="images/style3.jpg" class="img-responsive card" style="height:40px;">
						</a>		
					</div>

					<div class="col-sm-2 ">
						<a href="#" class="verticalCenter">
							<img src="images/style4.jpg" class="img-responsive card" style="height:40px;">
						</a>		
					</div>
					<div class=" col-sm-2 ">
						<a href="#" data-toggle="modal" data-target="#motifModal">
							<div class="card" style="height:40px; width:40px;">
								
								<i class="fa fa-pencil-square-o" aria-hidden="true" class="card" style="font-size: 30px;  line-height: 40px;"> </i>
							</div>
						</a>
					</div>


					<div class="col-sm-2 ">
						<a href="#" data-toggle="modal" data-target="#say-cheese">
							<div class="card" style="height:40px; width:40px;">
								
								<i class="fa fa-eye" aria-hidden="true" class="card" style="font-size: 30px; line-height: 40px;"> </i>
							</div>
							
						</a>		
					</div>
				</div>	
			
			<div class="row margintop20" id="take-photo-here">
				<div class="col-sm-12 nopaddingleft">
					<canvas id="div1" height="600px" width="570px" >
				    </canvas>
				</div>

				

			</div>	

			<div class="col-sm-12 nopaddingleft" >
				<div class="col-sm-12 nopaddingleft" >
					<h3>Dimentions of  Nameplate</h3>
					<img class="img-responsive " id="product-dimentions" src="images/product1.jpg" style="height: 250px; margin-left: auto; margin-right: auto;  ">
					<span id="qpd_banner">Marathi Typing On This Site Is Powered By <a href="http://www.quillpad.in/" target="_blank">Quillpad</a>.</span>
				</div>
				<div class="col-sm-12 nopaddingleft" style="text-align: justify;"> 
					<h3>Terms &amp; Conditions:</h3>
					This virtual tool lets you visualize the name plate. On completion of design and payment, you will receive a link with all your chosen options by email which can be referred to for your chosen selection. In case, for whatever reason you feel that you do not like your chosen design OR you are in two minds about the look of the name plate, please convey the same to us within 24 hours of booking the name plate so that we do not start the production. Post 24 hours, we will presume that the design chosen by you is final and we will take it under production. <a href="customizeTermsAndConditions.php">Read More</a>
				</div>
				<div class="col-sm-12">
					<h4> <input class="form-check-input" type="checkbox" value=""> Accept the Terms &amp; Conditions</h4>
				</div>
			</div>	
		</div>


		<div class="col-sm-3  ">
			<div class="row card" style="min-height: 1250px;">
				<div class="padding10" >
					<div class="CustomSubHead">
						<h4 >Your Name as on Name Plate</h4>
					</div>		
					<div class="row">					
						<div class="col-sm-6 inputWidth1  ">
							<h5>Line 1	</h5>
							<input type="text"   class="form-control inputSize line-1-text hastooltip">
						</div>
						<div class="col-sm-6  inputWidth paddingright20 noPadding ">
							<div class="col-sm-6">
								<h5>Size</h5>
								
					        	<div class="bs-docs-example custSize">
					              <select class="selectpicker line-1-font-size " data-style="btn-primary" id="line1FontSize">
					                  	<option>10</option>
							            <option>20</option>
							            <option>30</option>
							            <option>40</option>
							            <option>50</option>
							            <option>60</option>
							            <option>70</option>
							            <option>80</option>
							            <option>90</option>
							            <option>100</option>
							            <option>110</option>
							            <option>120</option>
							            <option>130</option>
							            <option>140</option>
							            <option>150</option>
							            <option>160</option>
							            <option>170</option>
							            <option>180</option>
							            <option>190</option>
							            <option>200</option>
							            <option>210</option>
							            <option>220</option>
							            <option>230</option>
							            <option>240</option>
							            <option>250</option>
							            <option>260</option>
							            <option>270</option>
							            <option>280</option>
					              </select>
				              </div>
							</div>	
								
							<div class="col-sm-6">	
								<h5>Color</h5>
								<!-- <input type="text"> -->
								<div class="bs-docs-example custSize" >
						              <select class="selectpicker line-1-font-color colors" data-style="btn-primary" id="line1FontColor">
						                  	
	  										<option value="00ff2e" style="background-color:#00ff2e"></option>
	  										<option value="25247c" style="background-color: #25247c"></option>
	  										<option value="000000" style="background-color:black"></option>
     										<option value="ff0000" style="background-color:#ff0000"></option>
								            
								        </select>
								    </div>     
							</div>
						</div>
					</div>

					<div class="row">					
						<div class="col-sm-6 inputWidth1  ">
							<h5>Line 2	</h5>
							<input type="text" class="form-control inputSize line-2-text">
						</div>
						<div class="col-sm-6  inputWidth paddingright20 noPadding ">
							<div class="col-sm-6">
								<h5>Size</h5>
								
					        	<div class="bs-docs-example custSize">
					              <select class="selectpicker line-2-font-size" data-style="btn-primary" id="line2FontSize">
					                  	<option>10</option>
							            <option>20</option>
							            <option>30</option>
							            <option>40</option>
							            <option>50</option>
							            <option>60</option>
							            <option>70</option>
							            <option>80</option>
							            <option>90</option>
							            <option>100</option>
							            <option>110</option>
							            <option>120</option>
							            <option>130</option>
							            <option>140</option>
							            <option>150</option>
							            <option>160</option>
							            <option>170</option>
							            <option>180</option>
							            <option>190</option>
							            <option>200</option>
							            <option>210</option>
							            <option>220</option>
							            <option>230</option>
							            <option>240</option>
							            <option>250</option>
							            <option>260</option>
							            <option>270</option>
							            <option>280</option>
					              </select>
				              </div>
							</div>	
								
							<div class="col-sm-6">	
								<h5>Color</h5>
								<!-- <input type="text"> -->
								<div class="bs-docs-example custSize" >
						              <select class="selectpicker line-2-font-color colors" data-style="btn-primary" id="line2FontColor">
						                  	<option value="00ff2e" style="background-color:#00ff2e"></option>
	  										<option value="25247c" style="background-color: #25247c"></option>
	  										<option value="000000" style="background-color:black"></option>
     										<option value="ff0000" style="background-color:#ff0000"></option>
								        </select>
								    </div>     
							</div>
						</div>
					</div>

					<div class="row">					
						<div class="col-sm-6 inputWidth1  ">
							<h5>Line 3	</h5>
							<input type="text" class="form-control inputSize line-3-text">
						</div>
						<div class="col-sm-6  inputWidth paddingright20 noPadding ">
							<div class="col-sm-6">
								<h5>Size</h5>
								
					        	<div class="bs-docs-example custSize">
					              <select class="selectpicker line-3-font-size" data-style="btn-primary" id="line3FontSize">
					                  	<option>10</option>
							            <option>20</option>
							            <option>30</option>
							            <option>40</option>
							            <option>50</option>
							            <option>60</option>
							            <option>70</option>
							            <option>80</option>
							            <option>90</option>
							            <option>100</option>
							            <option>110</option>
							            <option>120</option>
							            <option>130</option>
							            <option>140</option>
							            <option>150</option>
							            <option>160</option>
							            <option>170</option>
							            <option>180</option>
							            <option>190</option>
							            <option>200</option>
							            <option>210</option>
							            <option>220</option>
							            <option>230</option>
							            <option>240</option>
							            <option>250</option>
							            <option>260</option>
							            <option>270</option>
							            <option>280</option>
					              </select>
				              </div>
							</div>	
								
							<div class="col-sm-6">	
								<h5>Color</h5>
								<!-- <input type="text"> -->
								<div class="bs-docs-example custSize" >
						              <select class="selectpicker line-3-font-color colors" data-style="btn-primary" id="line3FontColor">
						                  	<option value="00ff2e" style="background-color:#00ff2e"></option>
	  										<option value="25247c" style="background-color: #25247c"></option>
	  										<option value="000000" style="background-color:black"></option>
     										<option value="ff0000" style="background-color:#ff0000"></option>
								            
								        </select>
								    </div>     
							</div>
						</div>
					</div>

					<div class="row">					
						<div class="col-sm-6 inputWidth1  ">
							<h5>Line 4	</h5>
							<input type="text" class="form-control inputSize line-4-text">
						</div>
						<div class="col-sm-6  inputWidth paddingright20 noPadding ">
							<div class="col-sm-6">
								<h5>Size</h5>
								
					        	<div class="bs-docs-example custSize">
					              	<select class="selectpicker line-4-font-size " data-style="btn-primary" id="line4FontSize">
					                  	<option>10</option>
							            <option>20</option>
							            <option>30</option>
							            <option>40</option>
							            <option>50</option>
							            <option>60</option>
							            <option>70</option>
							            <option>80</option>
							            <option>90</option>
							            <option>100</option>
							            <option>110</option>
							            <option>120</option>
							            <option>130</option>
							            <option>140</option>
							            <option>150</option>
							            <option>160</option>
							            <option>170</option>
							            <option>180</option>
							            <option>190</option>
							            <option>200</option>
							            <option>210</option>
							            <option>220</option>
							            <option>230</option>
							            <option>240</option>
							            <option>250</option>
							            <option>260</option>
							            <option>270</option>
							            <option>280</option>
					              	</select>
				              </div>
							</div>	
								
							<div class="col-sm-6">	
								<h5>Color</h5>
								<!-- <input type="text"> -->
								<div class="bs-docs-example custSize" >
						              	<select class="selectpicker line-4-font-color colors" data-style="btn-primary" id="line4FontColor">
	  										<option value="00ff2e" style="background-color:#00ff2e"></option>
								        </select>
								    </div>     
							</div>
						</div>
					</div>
				</div>	
					
					<hr class="hrLine">

					
					<div class="padding10">
						<div class="CustomSubHead">
							<h4 class="hastooltip" data-toggle="myToolTip"  data-placement="left" data-html="true"  title="<h4> Step 1</h4> <p>To Start With Select the nameplate of your choice<p>
							<p>You can change the name plate any time you require<p>" >Font Family</h4>
						</div>		
							<div class="fillterNav margintop20">
								<h5 >Line 1</h5>
					    		<div class="bs-docs-example custSize1" >
					              	<select class="selectpicker line-1-font-family" data-style="btn-primary">
					                  	
								        
							        </select>
							    </div>     
							</div>
					
							<div class="fillterNav margintop20">
								<h5>Line 2</h5>
								
					    		<div class="bs-docs-example custSize1" >
					              	<select class="selectpicker line-2-font-family" data-style="btn-primary">
					                  	
							        </select>
							    </div>     
							</div>

							<div class="fillterNav margintop20">
								<h5>Line 3</h5>
					    		<div class="bs-docs-example custSize1" >
					              	<select class="selectpicker line-3-font-family" data-style="btn-primary">
					                  	
							        </select>
							    </div>     
							</div>

							<div class="fillterNav margintop20">
								<h5>Line 4</h5>
					    		<div class="bs-docs-example custSize1" >
					              	<select class="selectpicker line-4-font-family" data-style="btn-primary">
					                  	
							        </select>
							    </div>     
							</div>
						</div>

					<hr class="hrLine">

					
			</div>	

		</div>	
	</div>

	</div>
	<hr class="hrLine margintop20">
	<div class="container">

	<div class="row center" id="related-products-go-here">
		
		
		
	</div>
	</div>
	</div>
	<div class="container margintop30 margintop30">
		<div class="row marginbottom30">
			<div class="col-sm-6  ">
				<div class="col-md-offset-1 col-sm-10">
				<img src="" id="nameplate-sample" class="  img-responsive" height="200px" alt="" ></div>
			</div>
			<div class="col-sm-6  ">
					<table class="table paddingright20 table-bordered topBorderNone">
						<!-- <thead class="thead-default text-center"> -->
						    <tr >
						      <th>Nameplate Base Price</th>
						      <th>Extra Character Charges</th>
						      <th>Extra FontSize Charges</th>
						      <th>Amount</th>
						      
						    </tr>
					  	<!-- </thead> -->
							<tr class="topBorderNone">
								<td class="col-md-3 nameplate-base-price"></td>
								<td class="col-md-3 nameplate-extra-char-charge"></td>
								<td class="col-md-3 nameplate-extra-fontsize-charge"></td>
								<td class="col-md-3 total-amount"></td>
								
							</tr>
							
						</table>
						<table class="table paddingright20 table-bordered ">	
							<tr>
								<td class="col-md-9">Calligraphy Charges /-</td>
								<td class="col-md-3 nameplate-gift-wrap"></td>
							</tr>


							<tr>
								<td class="col-md-9">Courier Charges</td>
								<td class="col-md-3 courier-charges"> Free*</td>
							</tr>


							<tr>
								<td class="col-md-9">Grand Total</td>
								<td class="col-md-3 nameplate-total"></td>
							</tr>	
						</table>	
					
					<h3>Remark</h3>	
					<textarea class="form-control" rows="5" id="comment"></textarea>		
					 <h4> <input class="form-check-input " id="gift-wrap-my-item" type="checkbox" value=""> Calligraphy Text @ ₹1000/-</h4>
						 
					<a href="#">
						<button type="button" class="btn btn-info whiteColor1 text-center "><i class="fa fa-save "></i> &nbsp; Save Name Plate and Continue</button>
					</a>	
					
					
			</div>
		</div>
	</div>

<!-- RequestDesignModal -->
<div class="modal fade" id="RequestDesignModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	    <form id="requestor-form">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Request Custom Design</h4>
			</div>
			<div class="modal-body">
			<!-- content goes here -->
				
				<div class="form-group">
					<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="request-name" placeholder="Enter Name">
				</div>
				<div class="form-group">
					<label for="request-email">Email address</label>
					<input type="email" class="form-control" id="request-email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="request-contact">Contact Number</label>
					<input type="number" class="form-control" id="request-contact" placeholder="Enter Contact Number">
				</div>
				<div class="form-group">
					<label for="request-requirements">Requirements</label>
					<textarea type="text" class="form-control" rows="3" placeholder="Give a Brief Description of what you want" name="requirements" id="request-requirements" required></textarea>
				</div>
				
			    
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Request Preview</button>
			</div>
		</form>
    </div>
  </div>
</div>.


</div>
 <!-- Modal -->
	<div class="modal fade" id="motifModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		        <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            <h4 class="modal-title" id="myModalLabel">Select Motif</h4>
		        </div>
		        <div class="modal-body">
		            <div class="container-fluid" >
		                <div class="row"  id="motifs-data">
		                    
		                </div>

		            </div>
		        </div>
		        <div class="modal-footer">
		            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		    </div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="say-cheese" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		        <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		        </div>
		        <div class="modal-body">
		            <div class="container" >
		                <img src="" class="img-responsive" id="snapshot">
		            </div>
		        </div>
		        <div class="modal-footer">
		            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		    </div>
		</div>
	</div>




<? include "footer.php" ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>
  	<script src="js/jquery.fontselect.min.js"></script>
    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/fabric.min.js"></script>
    <script src="js/customize.js"></script>
	

