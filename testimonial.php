<?php include "header.php" ?>


	<div class="container ">
		<div class="row marginbottom30" id="testimonial-go-here">
			
		</div>
	</div>



   	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   	<script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  	<script src="./js/bootstrap.min.js"></script>
  	<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <script src="js/vegas.min.js"></script>
   	<script type="text/javascript">
    $(document).ready(function(){
        
	 	var rootUrl = 'http://localhost/work/api/public/';
	 	
        function loadTestimonials(){
            $.ajax({
            
                url: rootUrl + "testimonials",
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
                        
                        html += '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  margintop30"><div class="col-sm-12 productBorder"><div class="testinomialcontent "><img src="images/quotes1.png" class="img-responsive"><p class="text-center paddingright30 paddingleft30">'+ testimonialMessage +'</p><img src="images/quotes2.png" class="img-responsive  pull-right"></div>	<div class="testAuthure paddingtop30  " style="text-align:right"> <strong >'+testimonialAuthor+'</strong><h6><span>'+ testimonialPlace +'</span>, '+testimonialDate+'</h6></div>	</div></div>'; 
                    });
                    $("#testimonial-go-here").html(html);
                    
                    
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            })
        }
        loadTestimonials();
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

	</script>

<?php include "footer.php" ?>