<? include "header.php" ?>
	 
	
	<section class="container margintop40 marginbottom40">
		<div class="row  ">
			<div class=" col-md-offset-4 col-sm-4  col-md-offset-4" >
				<div class="card ">
					<div class="padding10"> 
				    <h4>Your Email*</h4>
            		<input type="text" class="form-control padding20" id="exampleInputEmail1">
        		<h4>Your Password*</h4>
            		<input type="text" class="form-control padding20" id="exampleInputEmail1">
         		<!-- <a  data-toggle="modal" data-dismiss="modal" data-target="#myModal1"><p><h4 class="black">Register Here</h4></p></a> -->
                <div class="paddingtop20">
                  <input class="form-check-input" type="checkbox" value=""> Remember Me
                </div>
                <div class="paddingtop20">
                  <a href="#">Forget Password ?</a>
                </div>
              	<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              	<button type="button" class="btn btn-primary" data-dismiss="modal">Login</button> -->
                <div class="paddingbottom10 text-center">
                  <a href="#">
                    <button type="button" class="btn btn-info text-center " style="width:60%">Log In</button>
                  </a>
                </div>

 					</div>	              	
        </div>

          <div class="paddingtop30 text-center">
           <h4> Don't have an Account? <a href="signUp.php">Sign up today.</a></h4>
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