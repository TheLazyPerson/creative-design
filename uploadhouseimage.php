
<? include "header.php" ?>

 

	<section id="homeContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>Upload House Image</h1>
          </div>
        </div>
      </div><!-- Heading Content ends here-->
    </section>

	<div class="container" >
	
		<div class="row margintop20" id="take-photo-here">
			<div class="col-sm-12 nopaddingleft">
				<canvas id="uploadimage" height="600px" width="1000px" >
			    </canvas>
			</div>
		</div>	
		<section class="margintop30 marginbottom30">
			
			<form>
			  
			  <div class="form-group">
			    <input type="file" id="house-image">
			    <p class="help-block">Please select house image to view nameplate.</p>
			  </div>
			  
			  <button type="submit" class="btn btn-default">Upload</button>
			</form>
		</section>
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
	<script src="js/jquery.storage.js"></script> 
    <script >
    	
    	canvas = new fabric.Canvas('uploadimage');
		function readURL(input, selector) {

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		        	fabric.Image.fromURL(e.target.result, function(img) {
					   img.set({width: canvas.width, height: canvas.height, originX: 'left', originY: 'top'});
					   canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas));
					});
		            
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}
		fabric.Image.fromURL($.sessionStorage('chosenImg'), function(oImg) {
        	oImg.scale(0.1);
		  	canvas.add(oImg);
		});


    	$("#house-image").change(function(){
		    readURL(this,'.product-image-1');
		});

		
    </script>
	

