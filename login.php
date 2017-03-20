<? include "header.php" ?>
<section class="container margintop40 marginbottom40">
    <div class="row  ">
        <form class="form-login" method="post" id="login-form">
            <div class=" col-md-offset-4 col-sm-4  col-md-offset-4" >
                <div class="card ">
                     <div id="error">
                      <!-- error will be showen here ! -->
                    </div>
                    <div class="padding10">
                        <h4>Your Email*</h4>
                        <input type="email" placeholder="Username" class="form-control padding20" id="customer-username">
                        <h4>Your Password*</h4>
                        <input type="password" placeholder="Password" class="form-control padding20" id="customer-password">
                        <div class="paddingtop20">
                            <a href="#">Forget Password ?</a>
                        </div>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button> -->
                        <div class="paddingbottom10 paddingtop10 text-center">
                            <button type="submit" class="btn btn-info text-center " style="width:40%" id="btn-submit"><span class="glyphicon glyphicon-log-in"></span>  &nbsp; Login</button>
                        </div>
                    </div>
                </div>
                <div class="paddingtop30 paddingbottom10 text-center">
                <h4> Don't have an Account? <a href="signUp.php">Sign up today.</a></h4>
                </div>
            </div>
    </div>
    </form>
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

    var rootUrl = 'http://localhost/work/api/public/';
    var imageUrl = 'http://localhost/work/api/public/';
    $("#login-form").submit(function(e){
        e.preventDefault();
        var username = $("#customer-username").val();
        var password = $("#customer-password").val();

        var signinData = new FormData();
        signinData.append("username",username);
        signinData.append("password",password);
        $.ajax({

            type: 'POST',
            url: rootUrl + 'login',
            data: signinData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
            },
            success: function(data) {
                if (data["error"]) {

                    $("#error").fadeIn(1000, function() {


                        $("#error").html(data["error_message"]);

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');

                    });

                } else if (data["inactive"]) {
                  $("#error").fadeIn(1000, function() {


                    $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');
                    $("#error").html(data["inactive_message"]);
                  });

                } else if (data["success"]) {
                   $("#error").fadeIn(1000, function() {

                    $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
                    // similar behavior as clicking on a link
                    window.location.href = "index.php";
                  });
                } 
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
    });
</script>