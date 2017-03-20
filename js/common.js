
  var rootUrl = 'http://localhost/work/api/public/';
  var imageUrl = 'http://localhost/work/api/public/';

  	isLoggedIn();
   	function isLoggedIn(){
   		$.ajax({
	        url: rootUrl + "isloggedin",
	        dataType: "json",
	        success : function(result) {
	            if (result["success"]) {
	            	$("#user-not-logged-in").addClass("hidden");

	            	$("#user-logged-in").removeClass("hidden");
	            	$("#username-goes-here").text(result["name"]);
	           	}else{
	           		$("#user-logged-in").addClass("hidden");

	            	$("#user-not-logged-in").removeClass("hidden");
	            }
	        },
	        error: function(xhr, resp, text) {
	            console.log(xhr, resp, text);
	        }
	    });
   	}
  
  	function loadBasicCart(){
		$.ajax({
        url: rootUrl + "cart",
        dataType: "json",
        success : function(result) {
            var total = result['total'];
            var items = result['items'];
           	$(".cart-total").text(total);
           	$(".cart-item-count").text(items);
        },
        error: function(xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });
  }
	 function addToCart( productId, productType){
	    var cartProduct = new FormData();
	    cartProduct.append("product_id",productId);
	    cartProduct.append("product_type",productType);
	   
	    $.ajax({
	        url: rootUrl + "cart/add",
	        type: "POST",
	        //dataType: "json",
	        data: cartProduct,
	        contentType: false,
	        processData: false,
	        success : function(result) {
	            var total = result['total'];
	            var items = result['items'];
	            $(".cart-total").text(total);
	            $(".cart-item-count").text(items);
	            window.location.href="cart.php";
	        },
	        error: function(xhr, resp, text) {
	            console.log(xhr, resp, text);
	        }
	    });
	  }
  	function removeFromCart( productId, productType){
	    var cartProduct = new FormData();
	    cartProduct.append("product_id",productId);
	    cartProduct.append("product_type",productType);
	   
	    $.ajax({
	        url: rootUrl + "cart/remove",
	        type: "POST",
	        //dataType: "json",
	        data: cartProduct,
	        contentType: false,
	        processData: false,
	        success : function(result) {
	            loadBasicCart();
	        },
	        error: function(xhr, resp, text) {
	            console.log(xhr, resp, text);
	        }
	    });
	  }

 $(document).ready(function(){
 	var pathname = $(location).attr('pathname');
 	var Filename= pathname.split('/').pop();

 	if (Filename == "" ) {
 		$("#mainNavigation").find('a[href="index.php"]').parent().addClass("active");

 	}else if( Filename == "displayBlog.php" ){
	 	$("#mainNavigation").find('a[href="blog.php"]').parent().addClass("active");
	}else if( Filename == "displayProduct.php" || Filename == "customized.php" ){
	 	$("#mainNavigation").find('a[href="product.php"]').parent().addClass("active");
	}else{
	 	$("#mainNavigation").find('a[href="'+Filename+'"]').parent().addClass("active");
	}
 	loadBasicCart();
});