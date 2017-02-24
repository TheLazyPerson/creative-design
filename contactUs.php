<? include "header.php" ?>

 <!-- name plate heading with color-->
    <section id="homeContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>Contact Us </h1>
          </div>
        </div>
      </div><!-- Heading Content ends here-->
    </section>
<!--end of name plate heading with color-->


<section>
	<div class="container margintop30 marginbottom30">
		<div class="row">
			<div class="col-sm-6 paddingright20">
				<div class="col-sm-12 card ">
	        		<div class="">
	        			<h4>Your Name*</h4>
	        				<input type="text" class="form-control padding20" id="exampleInputEmail1">
	        			<h4>Your Email*</h4>
	        				<input type="text" class="form-control padding20" id="exampleInputEmail1">
	        			<h4>Subject*</h4>
	        				<input type="text" class="form-control padding20" id="exampleInputEmail1">
	        				
	        			<h4>Your Message</h4>
	        				<textarea class="form-control" rows="5" id="comment"></textarea>
	        			<div class="paddingtop20 paddingbottom10">
                  <a href="#">
  							    <button type="button" class="btn btn-info text-center ">Submit</button>
  					     	</a>
                </div>					
	        		</div>		
	        	</div>
			</div>
			<div class="col-sm-6 ">
					<div class="aboutContent" >
						<div class="col-sm-12  card" >
			             <h3>Corporate Office</h3>
			             	
			             	<div class="address"> 
			               		 <p><i class="fa fa-home iconSize paddingbottom10 paddingright10"></i><p> 
			                		<div  style="ContactText"><h5> Shop No. 6, Venktesh Hights, 448, Guruwar Peth, Nr. Ahilyadevi Mitra Mandal, Pune 411 042.</h5>
			                		</div>
			          		</div><!-- Address ends  here-->

			          		<div class="address "> 
			               		 <p><i class="fa fa-phone iconSize  paddingright10"></i><p> 
			                		<div  style="ContactText"><h5> +91 - 80876 76981 </h5>
			                		</div>
			          		</div><!-- Address ends  here-->

			          		<div class="address paddingbottom10"> 
			               		 <p><i class="fa fa-envelope iconSize  paddingright10"></i><p> 
			                		<div  style="ContactText"><h5> design@gharkonacha.com</h5>
			                		</div>
			          		</div><!-- Address ends  here-->


        			
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3340.8434370325504!2d73.85068245009255!3d18.469234087377288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eab06333754b%3A0x134943aa26b59a7e!2sNatraj+Residency%2C+11%2F1A%2C+Building+B%2C+Chhatrapati+Sambhaji+Nagar%2C+Yashwantrao+Chavan+Nagar%2C+Pune%2C+Maharashtra+411043!5e1!3m2!1sen!2sin!4v1486152182289" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
    			
	         			</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<? include "footer.php" ?>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  <script src="./js/bootstrap.min.js"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <script src="js/vegas.min.js"></script>
    <script src="js/common.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
      
       $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
        $(".wrapper").vegas({
            animation: 'kenburnsUp',
            transitionDuration: 2000,
            slides: [
                { src: "images/slide-show-1-low.jpg" },
                { src: "images/slide-show-3-low.jpg" },
                { src: "images/slide-show-5-low.jpg" }
            ]
            
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
        $(".center").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000
      });

        $(document).ready(function(){
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

});

        // $('#myModal2').appendTo("body");


      $('.collapse').on('shown.bs.collapse', function (e) {
  $('.collapse').not(this).removeClass('in');
});

$('[data-toggle=collapse]').click(function (e) {
  $('[data-toggle=collapse]').parent('li').removeClass('active');
  $(this).parent('li').toggleClass('active');
});
});
</script> 