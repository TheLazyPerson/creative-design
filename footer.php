<!--Footer -->
    <Footer >
      <div style="background:#202020;">
        <div class="container">
          <div class="row margintop40 marginbottom40">
            <div class="col-sm-3 footerTextColor"><!-- Testimonial start  here-->
              <h3>Testimonial</h3>
              <div id="menCollection" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active carouselElement">
                      <a href="#">
                        <h5>"1Good Going ! Amazing Serveice & Prompt Delivers"</h5>
                        <span>Tarun Narula <br/>
                        Luknow, 20-01-2016</span>
                      </a>   
                  </div><!-- End Item -->
                  <div class="item carouselElement">
                       <a href="#">
                        <h5>"2Good Going ! Amazing Serveice & Prompt Delivers"</h5>
                        <span>Tarun Narula <br/>
                        Luknow, 20-01-2016</span>
                      </a>  
                  </div><!-- End Item -->
                  <div class="item carouselElement">
                      <a href="#">
                        <h5>"3Good Going ! Amazing Serveice & Prompt Delivers"</h5>
                        <span>Tarun Narula <br/>
                        Luknow, 20-01-2016</span>
                      </a>   
                   </div><!-- End Item -->                                
                </div><!-- End Carousel Inner -->
                <!-- Controls -->
                <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                  <span class="fa fa-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                  <span class="fa fa-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- /.carousel -->

             
                <div class="row" style="margin-top:50px;">
                  <div class="col-lg-12"><!--social icons-->
                    <p class="footer-notice pull-left">
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                      </span>
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
                      </span>
                      <span class="fa-stack fa-lg" style="color:#ffffff">
                        <i class="fa fa-circle fa-stack-2x icon-background1"></i>
                        <i class="fa fa-google-plus fa-stack-1x"></i>
                      </span>
                      <span class="fa-stack fa-lg" style="color:#ffffff">
                        <i class="fa fa-circle fa-stack-2x icon-background1"></i>
                        <i class="fa fa-whatsapp fa-stack-1x"></i>
                      </span>
                    </p>
                  </div>
                </div>
             
            </div><!-- Testimonial ends  here-->

            <!-- Sitmap start  here-->
            <div class="col-sm-3 footerTextColor FootSiteMap" >
              <div class="col-md-offset-2">
               <h3>Site Map</h3>
                <ul>
                  <li><a href="testimonial.php">Testimonial</a></li>
                  <li><a href="offers.php">Offers</a></li>
                  <li><a href="contactUs.php">Contact Us</a></li>
                  <li><a href="about.php">About Us</a></li> 
                  <li><a href="product.php">Product</a></li>
                  <li><a href="franchise.php">Franchise</a></li>
                  <li><a href="">Cancallation & Returns/FAQ</a></li>
                  <li><a href="">Terms & Condition</a></li>
                  <!-- <li><a href="">Site map</a></li>   --> 
                </ul>
              </div>
            </div><!-- sitemap ends here-->
            <!-- Products start  here-->
            <div class="col-sm-3 footerTextColor FootSiteMap">
              <div class="col-md-offset-2">
              <h3>Products</h3>
                <ul >
                  <li><a href="">Nameplates</a></li>
                  <li><a href="">Lampshades</a></li>
                  <li><a href="">Wall Clocks</a></li>
                  <li><a href="">Tea Coasters</a></li> 
                  <li><a href="">Key chains</a></li>
                  <li><a href="">Ear rings</a></li>   
                </ul>
              </div>
            </div><!-- Products ends  here-->
            <!-- Address start  here-->
            <div class="col-sm-3 footerTextColor footContactIconSize">
               <h3>Contact Us</h3>
                  <p><i class="fa fa-home iconSize paddingbottom30 paddingright10"></i><p> 
                  <div class="contactText" style="padding-bottom:5px;"> Shop No.6,Venktesh Hights, 448,Guruwar Peth,Nr. Ahilyadevi Mitra Mandal,Pune 411 042.</div>
                
                  <i class="fa fa-phone  contactText iconSize paddingright10"></i> 
                    <div class="contactText">+91 - 80876 76981</div><br>
                    <i class="fa fa-envelope contactText iconSize paddingright10"></i> 
                      <div class="contactText">design@gharkonacha.com
                        <a class="back-to-top" style="display: inline;" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                      </div>
            </div><!-- Address ends  here-->
          </div> 
        </div><!-- row ends  here-->
    </div>  <!-- container ends  here-->

    <div style="min-height:50px;background:black"></div>
  </Footer>
  <!--script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/bootstrap-slider.js"></script>
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
      slidesToShow: 4,
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

$('.slider').slider()

});
</script-->