<? include "header.php" ?>

 <!--about us heading with color-->
    <section id="homeContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>Franchise</h1>
          </div>
        </div>
      </div><!-- Heading Content ends here-->
    </section>
<div class="clearfix"></div>
	
	<!--  about us content-->
	<div class="container">	
		<div class="row ">
      <div class="col-sm-12"> 
        <div class="card margintop30 marginbottom30 aboutContent">
    			<p class="padding10"> Given our experience in the market and in business, we think there would be unique and fruitful opportunity to be a franchise partner of our products. Our products are liked and appreciated by domestic and international customers too. We have seen immense interest and demand by many clients where we do not have physical presence. Though, we are expanding rapidly, we strongly belive that a like minded partner would add immense value to the company.</p>


    			<p class="padding10">The franchise should be an individual/entrepreneur with some level of exposure to Interior Designing or Art
    			</p>

    			<p class="padding10"> The franchise should be willing to invest capital to operate a owned or rented retail outlet(175 to 300 Square feet) in very prime retail location or a famous mall.
    			</p>		

    			<p class="padding10">
    			GharKonacha.com is a closely held company, big on quality and determined to have strong positive influence one of surrounding communities. We will expect the same of our partners.</p>
    			<p class="padding10">
    			Prospective franchisee interested may please email or post with detail resume to rakeshkarli@gmail.com. We would get in touch with you at the earliest</p>
		    </div>
      </div>  
    </div>
  </div>



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