<? include "header.php" ?>

 <!--about us heading with color-->
    <section id="homeContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>About Us</h1>
          </div>
        </div>
      </div><!-- Heading Content ends here-->
    </section>
<div class="clearfix"></div>
	
	<!--  about us content-->
	<div class="container">	
		<div class="row card margintop30 marginbottom30 aboutContent">
			<p class="padding10"> Buy Decorative Bunglow Ourdoor Nameplate Online India at Best Prices</p>
			<p class="padding10">
				Name plates by and large serve as a recognizable proof imprint. They are likewise used in the marking of houses. House nameplates are used to demonstrate names and number of the houses. They additionally Serve as the pointer of locations. They are mad of an assorted quality of outward appearances, measurements, lettering and colors. By and large, the client has and inclination that this bungalow name and number can be written in style. Bungalow outdoor nameplate online india is made of different materials, similar to aluminium, metal, ceramic, wooden and slate. They are made to order. The since quite a while ago sttled material for bunglow outdoor name plates in metal. It uses advanced structures and letters. The painted foundation and a scope of examples furthur customize the deciding item. The letters on aluminium house name plates can be hoisted or planar. There are additionally artistic house name plates that can withstand most climate conditions, while in the meantime adorned with a scope of outlines. Apart from these materials, wooden namplate designs are also coming into the picture. They look more stunning with unique motif cut designs, shapes and sizes. The texture of wooden name plate gives out a very elegant look to any bungalow door or a flat door! The best way to find out nameplate designs for bungalow outdoor is online! </p>

			<p class="padding10">
				Incepted in the year 2010, CREATIVE DESIGN, has entreched itself as an eminent manufacturer & supplier of the industrial nameplate & House Nameplate. After satisfying its customers for nearly 4 years we have felt the need and demand for designer nameplates for homes.
			</p>

			<p class="padding10"> Creative Designs was established in the year 2010 with an ideas to cater to the needs of nameplates. after much innovation & research we are ready with our latest offering kalakruti for our customers.</p>

			<p class="padding10"> Kalakruti is a brand of creative design which only and exclusively deals in designer Nameplates. At Kalakruti we are using natural elements of mother nature and combining it all to create a masterpiece for you. we are putting together materials like Natural Wood, Glass, Stone & Metals together to create your Dream Nameplate. To make your Nameplate extra special & different we create special fonts from expert calligraphy artist to add extra bit of exclusicveness to your Nameplate.</p>		
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