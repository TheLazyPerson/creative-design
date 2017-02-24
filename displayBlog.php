<?php include "header.php" ?>

<div class="about-us-image" id="fullpage mainnav"  style="position:relative">
    <div class="text-center aboutImgText" >
       <h1 id="blog-title"> </h1> 
    </div>  
  </div>

<div class="container  marginbottom30">
    <div class="row margintop30">
    	<div class="padding10" id="blog-content">
    		
    	</div>
    </div>


	<!--about us heading with color-->
    <section id="homeContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>Recent Blogs</h1>
          </div>
        </div>
      </div><!-- Heading Content ends here-->
    </section>
	<!--  about us content-->
	<section class="publicaciones-blog-home margintop30" >
		


          <div class="row">
			     <div class="col-page col-sm-4 col-md-3 blog1">
              <a href="#" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="" id="blog-image1" class="img-responsive ">
                </div>
                <div class="contenido-publicacion-home">
                  <h3 class="blog-title"></h3>
                  <p class="blog-description"><span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div>
            <div class="col-page col-sm-4 col-md-3 blog2">
              <a href="#" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="" id="blog-image2" class="img-responsive ">
                </div>
                <div class="contenido-publicacion-home">
                  <h3 class="blog-title"></h3>
                  <p class="blog-description"><span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More </span>
                </div>
              </a>
            </div>
            <div class="hidden-sm col-page col-sm-4 col-md-3 blog3">
              <a href="#" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="" id="blog-image3" class="img-responsive ">
                </div>
                <div class="contenido-publicacion-home">
                  <h3 class="blog-title"></h3>
                  <p class="blog-description"><span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More </span>
                </div>
              </a>
            </div>
            <div class="hidden-sm col-page col-sm-4 col-md-3 blog4">
              <a href="#" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="" id="blog-image4" class="img-responsive">
                </div>
                <div class="contenido-publicacion-home">
                  <h3 class="blog-title"></h3>
                  <p class="blog-description"> <span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More </span>
                </div>
              </a>
            </div>
            
            
		      </div>
       
	</section>
</div>


<?php include "footer.php" ?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/common.js"></script>
   <script src="js/vegas.min.js"></script>
  <script>
  	$(document).ready(function(){
      var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };
        var id = getUrlParameter('id');
        var rootUrl = 'http://localhost/work/api/public/';
        var imageUrl = 'http://localhost/work/api/public/';
        var blogId = "";
        var blogTitle ="";
        var blogShortDescription = "";
        var blogContent ="";
        var blogImagePath = "";
        var blogVisible ="";
        $.ajax({
            
            url: rootUrl + "blog/" + id,
            dataType: "json",
            success : function(result) {
                
                var data = result['blog'];

                blogId = data['id'];
                blogTitle = data['title'];
                blogShortDescription = data['short_description'];
                blogContent = data['content'];
                blogImagePath = data['image_path'];
                
                $('#blog-content').html(blogContent);
                $('#blog-title').text(blogTitle);
                 $(".about-us-image").vegas({
                    slides: [
                        { src: imageUrl+blogImagePath },
                        
                    ],
                    overlay: 'js/vegas/overlays/03.png'
                });
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });

    $.ajax({
            url: rootUrl + "blog/home",
            dataType: "json",
            success : function(result) {
                var selector = ".blog";
                var data = result['blogs'];
                var i = 1;
                $.each(data, function (key, value) {

                    var short_description = data[key]['short_description'];
                    var image_source = imageUrl+data[key]['image_path'];
                    var blogLink = 'displayBlog.php?id='+data[key]['id'];
                    $(selector+i+" .blog-title").text(data[key]['title'] );
                    $(selector+i+" .blog-description").text(short_description.slice(0,100) );
                    $(selector+i+" a").attr('href', blogLink);
                    $("#blog-image"+i).attr('src',image_source);
                    i++;
                });
               
                
  
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
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
        /*
        $('#back-to-top').tooltip('show');
*/
        // $('#myModal2').appendTo("body");
    }); 
	
  </script>