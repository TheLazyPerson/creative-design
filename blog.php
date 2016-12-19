<? include "header.php" ?>

 <!--about us heading with color-->
    <section id="homeContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>Blogs</h1>
          </div>
        </div>
      </div><!-- Heading Content ends here-->
    </section>

	
	<!--  about us content-->
	<section class="publicaciones-blog-home">
		<div class="container">	
			<div class="row row-page margintop30 marginbottom30 aboutContent " >
        <div class="col-page col-sm-8 col-md-8 ">
          <a href="displayBlog.php" class="black fondo-publicacion-home">
            <div class="img-publicacion-principal-home">
              <img class="" src="images/showCase11.jpg" class="img-responsive ">
            </div>
            <div class="contenido-publicacion-principal-home">
              <h3>Creative Design</h3>
              <p class="text-justify">We’ve got you covered with a curated set of options. Keep things current with writable areas, or say it loud with flat-cut graphics.<span>...</span></p>
            </div>
            <div class="mascara-enlace-blog-home">
              <span>Read More </span>
            </div>
          </a>
        </div>
				<div class="col-sm-4">
					<p  class="text-justify">
						Another definition for design is a roadmap or a strategic approach for someone to achieve a unique expectation. It defines the specifications, plans, parameters, costs, activities, processes and how and what to do within legal, political, social, environmental, safety and economic constraints in achieving that objective.</p>
					<p  class="text-justify">
						Here, a "specification" can be manifested as either a plan or a finished product, and "primitives" are the elements from which the design object is composed.</p>
					</p>
				</div>					
			</div>

          <div class="row">
			     <div class="col-page col-sm-4 col-md-3 ">
              <a href="" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="images/showCase9.jpg" class="img-responsive ">
                </div>
                <div class="contenido-publicacion-home">
                  <h3>CHOOSE YOUR FLAVOR</h3>
                  <p>Let people know what you’re all about before they step foot in your door. Handcrafted details help you stand out above the crowd.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More </span>
                </div>
              </a>
            </div>
            <div class="col-page col-sm-4 col-md-3">
              <a href="" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="images/showCase10.jpg" class="img-responsive ">
                </div>
                <div class="contenido-publicacion-home">
                  <h3>BUILT TO LAST</h3>
                  <p>Conquer the great outdoors with specialized woods, finishes, and graphics that stand the test of time.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More </span>
                </div>
              </a>
            </div>
            <div class="hidden-sm col-page col-sm-4 col-md-3">
              <a href="" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="images/showCase11.jpg" class="img-responsive ">
                </div>
                <div class="contenido-publicacion-home">
                  <h3>Good Looking Design</h3>
                  <p>Designing often necessitates considering the aesthetic, functional, economic, and sociopolitical dimensions of both the design object and design process. <span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More </span>
                </div>
              </a>
            </div>
            <div class="col-page col-sm-4 col-md-3">
              <a href="#" class="todas-las-publicaciones-home contenido-publicacion-principal-home ">
                  <H3 style="color:white">KILLER GOOD LOOKS</h3>
                  <p style="color:white" >We Make the Design which is the creation of a plan or convention for the construction of an object, system or measurable human interaction</p>
              </a>
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