<!--Footer -->
    
<footer >
    <div style="background:#202020;">
        <div class="container">
          <div class="row margintop40 marginbottom40">
            <div class="col-sm-3 footerTextColor"><!-- Testimonial start  here-->
              <h3>Testimonial</h3>
              <div id="menCollection" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="footer-testimonials">
                                                
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
                  <li><a href="faq.php">Cancallation & Returns/FAQ</a></li>
                  <li><a href="termsCondition.php">Terms & Condition</a></li>
                  <!-- <li><a href="">Site map</a></li>   --> 
                </ul>
              </div>
            </div><!-- sitemap ends here-->
            <!-- Products start  here-->
            <div class="col-sm-3 footerTextColor FootSiteMap">
              <div class="col-md-offset-2">
              <h3>Products</h3>
                <ul id="footer-categories">
                  
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
  </footer>

  <script type="text/javascript">
     
     
    function loadFooterCategories(){
      $.ajax({
            url: rootUrl + "categories",
            dataType: "json",
            success: function(result) {
                var html = "";
                var categoryId = "";
                var categoryName = "";

                //console.log(result);
                var data = result['categories'];

                $.each(data, function(key, value) {

                    categoryId = data[key]['id'];
                    categoryName = data[key]['name'];
                    categoryDescription = data[key]['description'];

                    productCategoryFiler = categoryName.replace(/\s+/g, '-').toLowerCase();

                    html += '<li><a href="product.php?category='+productCategoryFiler+'" class="filters category-filter" data-filter="' + productCategoryFiler + '" >  ' + categoryName + '</a><ul>';
                   
                    html += '</li>';
                });
               
                $("#footer-categories").html(html);


        },
        error: function(xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });

    }
    function loadFooterTestimonials(){
      $.ajax({
      
          url: rootUrl + "testimonials/footer",
          dataType: "json",
          success : function(result) {
              var html = "";
              var testimonialId = "";
              var testimonialMessage ="";
              var testimonialAuthor = "";
              var testimonialPlace = "";
              var testimonialDate = "";
              //console.log(result);
              var data = result['testimonials'];
              
              $.each(data, function (key, value) {
              
                  testimonialId = data[key]['id'];
                  testimonialMessage = data[key]['message'];
                  testimonialAuthor = data[key]['author'];
                  testimonialPlace = data[key]['place'];
                  testimonialDate = data[key]['date'];
                  
                  html += ' <div class="item carouselElement"><a href="#"><h5>'+testimonialMessage+'</h5><span>'+testimonialAuthor+' <br/> '+testimonialPlace+', '+testimonialDate+'</span></a></div><!-- End Item -->'; 
              });
              $("#footer-testimonials").html(html);
              $("#footer-testimonials div").first().addClass("active");
              
          },
          error: function(xhr, resp, text) {
              console.log(xhr, resp, text);
          }
      })
    }
    $(document).ready(function (e) {

        loadFooterCategories();
        loadFooterTestimonials();
    });


  </script>