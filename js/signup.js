

var rootUrl = 'http://localhost/work/api/public/';
var imageUrl = 'http://localhost/work/api/public/';
$("#register-form").submit(function(e){
    e.preventDefault();
   var customerFirstName = $("#customer-first-name").val();
    var customerLastName = $("#customer-last-name").val();
    var customerEmail = $("#customer-email-address").val();
    var customerPhone = $("#customer-phone").val();
    var customerCity = $("#customer-city").val();
    var customerPassword = $("#customer-password").val();

    var signupData = new FormData();
    signupData.append("firstname",customerFirstName);
    signupData.append("lastname",customerLastName);
    signupData.append("email_address",customerEmail);
    signupData.append("phone",customerPhone);
    signupData.append("city",customerCity);
    signupData.append("password",customerPassword);
    $.ajax({

        type: 'POST',
        url: rootUrl + 'signup',
        data: signupData,
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

                    $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign Up');

                });

            }
             if (data["success"]) {

                $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
                $("#error").html(data["success_message"]);

            } 
        },
        error: function(xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });
});
/* form submit */ 