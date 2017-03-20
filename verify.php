<? include "header.php" ?>
<section class="container margintop40 marginbottom40" style="min-height: 300px;">
    <div class="row">
        
        <div id="error">
            

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
        }

        var rootUrl = 'http://localhost/work/api/public/';
    var imageUrl = 'http://localhost/work/api/public/';
    var id = getUrlParameter('id');
    var code = getUrlParameter('code');
    var verifyData = new FormData();
    verifyData.append("id",id);
    verifyData.append("code",code);
    $.ajax({

        type: 'POST',
        url: rootUrl + 'verify',
        data: verifyData,
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


               }); 
            } else if (data["success"]) {
                $("#error").fadeIn(1000, function() {


                    $("#error").html(data["success_message"]);
                });
            } 
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