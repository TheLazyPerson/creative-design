<?php include "header.php" ?>
<div class="container">
    <section class="margintop30">
        <div class="row">
            <div class="col-sm-5 " >
                <div class="proImage productBorder  padding20" >
                    <div class="preview-pic tab-content">
                        <div class="tab-pane  active" id="pic-1"><img class="zoom" src="" /></div>
                        <div class="tab-pane" id="pic-2"><img  src="" /></div>
                        <div class="tab-pane" id="pic-3"><img  src="" /></div>
                        <div class="tab-pane" id="pic-4"><img  src="" /></div>
                        <div class="tab-pane" id="pic-5"><img  src="" /></div>
                    </div>
                </div>
                <div class="row">
                    <ul class="preview-thumbnail nav nav-tabs productBorder ">
                        <li class="active productBorder "><a data-target="#pic-1" data-toggle="tab"><img src="" /></a></li>
                        <li class="productBorder"><a data-target="#pic-2" data-toggle="tab"><img src="" /></a></li>
                        <li class="productBorder"><a data-target="#pic-3" data-toggle="tab"><img src="" /></a></li>
                        <li class="productBorder"><a data-target="#pic-4" data-toggle="tab"><img src="" /></a></li>
                        <li class="productBorder"><a data-target="#pic-4" data-toggle="tab"><img src="" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-7 proComtent">
                <span class="proHead product-name"></span><br/>
                <h3 class="product-price"></h3>
                <div class="clearfix"></div>
                <a href="#" class="btn btn-info customize change-button shouldBeHidden"><i style="color:#ffffff;" class="fa fa-pencil-square-o" aria-hidden="true"></i> Customize</a>
                <a href="#" class="btn btn-info add-into-cart change-button shouldBeVisible"><i  style="color:#ffffff;" class="fa fa-shopping-cart" aria-hidden="true"> </i> Add To Cart</a>
                <a href="#" class="btn btn-info add-to-wishlist" ><i  style="color:#ffffff;" class="fa fa-heart" aria-hidden="true"></i> Add to Wishlist </a>
                <br />
                <br />
                <br />
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="col-sm-2 black">In Stock:</td>
                            <td class="col-sm-2 ">Yes</td>
                            <td class="col-sm-2 black">Material</td>
                            <td class="col-sm-2 product-material"></td>
                        </tr>
                        <tr>
                            <td class="col-sm-2 black">COD</td>
                            <td class="col-sm-2 product-cod">No</td>
                            <td class="col-sm-2 black shouldBeVisible"></td>
                            <td class="col-sm-2 product-letter-type shouldBeVisible"></td>
                            <td class="col-sm-2 black shouldBeHidden">Letters</td>
                            <td class="col-sm-2 product-letter-type shouldBeHidden"></td>
                        </tr>
                        <tr class="shouldBeHidden">
                            <td class="col-sm-2 black">Fitting Place</td>
                            <td class="col-sm-2 product-fitting-place"></td>
                            <td class="col-sm-2 black">Nameplate Use </td>
                            <td class="col-sm-2 product-use"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered tablepadding ">
                    <tbody>
                        <tr>
                            <td class="col-sm-1 onlyPaddingRight black">Depth</td>
                            <td class="col-sm-1 "><span class="product-depth"></span> mm</td>
                            <td class="col-sm-1 onlyPaddingRight black">Length</td>
                            <td class="col-sm-1 "><span class="product-length"></span> inch</td>
                            <td class="col-sm-1 black">Height</td>
                            <td class="col-sm-1"><span class="product-height"></span> inch</td>
                            <td class="col-sm-1 black">Weight</td>
                            <td class="col-sm-1"><span class="product-weight"></span> kg</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="col-md-12">
                                <div class="col-md-12 black">Note:</div>
                            	<br>
                            	<div class="col-md-12 black"><p class="product-notes"></p></div>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <hr/>
    <div class="container" style="min-height:600px;">
        <div class="col-sm-12">
            <div class="tab-content">
                <div >
                    <h3 class="black">Description</h3>
                    <p  class="text-justify pContent product-description">
                    </p>
                </div>
                <div >
                    <h3>Additional Information</h3>
                    <p class="product-additional-information"></p>
                </div>
                <div >
                    <section class="margintop50 marginbottom50">
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="proHead black">Customer Reviews</span><br/>
                                <h3 class="black">Add a review </h3>
                                <h4>Your email address will not be published. Required fields are marked *</h4>
                                <h4 class="reviewFeilds">Your Rating</h4>
                                &nbsp;
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i><br/>
                                <h4 class="reviewFeilds">Your Review *</h4>
                                <textarea class="form-control" rows="3"></textarea>
                                <h4 class="reviewFeilds">Name *</h4>
                                <input type="number" class="form-control " id="exampleInputName2" placeholder=" ">
                                <h4 class="reviewFeilds">Email *</h4>
                                <input type="number" class="form-control " id="exampleInputName2" placeholder=" ">
                                <br>
                                
                                <button type="button" class="btn btn-info text-center margintop30; ">Add Review</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>
<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/common.js"></script>
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
    	var type = getUrlParameter('type');
    	var rootUrl = 'http://localhost/work/api/public/';
    	var imageUrl = 'http://localhost/work/api/public/';
    	$('.shouldBeHidden').removeClass('hidden');
    	$('.shouldBeVisible').addClass('hidden');
    	if (type == 1) {
    		$.ajax({
                
                url: rootUrl + "productnormal/" + id,
                dataType: "json",
                success : function(result) {
                    
                    $('.shouldBeHidden').addClass('hidden');
                    $('.shouldBeVisible').removeClass('hidden');
                    var data = result['product'];
    
                    productId = data['id'];
                    productName = data['name'];
                    productPrice = data['price'];
                    productDescription = data['description'];
                    productAddtionalInformation = data['additionalInformation'];
                    productMaterial = data['material'];
                    productCod = data['cod'];
                    productFeatured = data['featured'];
                    productLength = data['length'];
                    productWidth = data['width'];
                    productHeight = data['height'];
                    productWeight = data['weight'];
                    productNotes = data['notes'];
                    productStatus = data['status'];
                    if (productMaterial == 1) { productMaterial = "Yes" }
                    if (productCod == 1) { productCod = "Yes" }
                    if (productFeatured == 1) { productFeatured = "Yes" }
                        
                    productPrice = "₹ "+ productPrice;
                    $('.product-name').text(productName);
                    $('.product-price').text(productPrice);
                    $('.product-description').text(productDescription);
                    $('.product-additional-information').text(productAddtionalInformation);
                    $('.product-cod').text(productCod);
                    $('.product-material').text(productMaterial);
                    $('.product-featured').text(productFeatured);
                    $('.product-length').text(productLength);
                    $('.product-width').text(productWidth);
                    $('.product-height').text(productHeight);
                    $('.product-weight').text(productWeight);
                    $('.product-notes').text(productNotes);
    
                    productImage = imageUrl+data['images']["1"];
    		        productImage2 = imageUrl+data['images']["2"];
    		        productImage3 = imageUrl+data['images']["3"];
    		        productImage4 = imageUrl+data['images']["4"];
    		        productImage5 = imageUrl+data['images']["5"];
                    
                    $("#pic-1 img").attr('src',productImage);
    		       	$("#pic-2 img").attr('src',productImage2);
    		       	$("#pic-3 img").attr('src',productImage3);
    		       	$("#pic-4 img").attr('src',productImage4);
    		       	$("#pic-5 img").attr('src',productImage5);
    		       	$('[data-target="#pic-1"]').find('img').attr('src', productImage);
    				$('[data-target="#pic-2"]').find('img').attr('src', productImage2);
    				$('[data-target="#pic-3"]').find('img').attr('src', productImage3);
    				$('[data-target="#pic-4"]').find('img').attr('src', productImage4);
    				$('[data-target="#pic-5"]').find('img').attr('src', productImage5);
                  
    				 $("#pic-1 img, #pic-2 img, #pic-3 img, #pic-4 img, #pic-5 img").wrap('<span ></span>').css('display', 'block').parent().zoom({	magnify: 3 });
       
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
    	}else if (type == 2) {
    		$('.customize').attr('href', 'customized.php?id='+id);
    
    		$.ajax({
                
    		    url: rootUrl + "product/nameplate/"+id,
    		    dataType: "json",
    		    success : function(result) {
    		        var html = "";
    		        var productId = "";
    		        var productName ="";
    		        var productDescription = "";
    		        var productAddtionalInformation ="";
    		        var productPriceAfterMaxCharacters ="";
    		        var productMaxCharacter ="";
    		        var productMaterial = "";
    		        var productCategory = "";
    		        var productCod = "";
    		        var productLetterType ="";
    		        var productFittingPlace ="";
    		        var productLength ="";
    		        var productHeight = "";
    		        var productWeight = "";
    		        var productPrice = "";
    		        var productTrending ="";
    		        var productImage = "";
    		        var productNotes = "";
    		        //console.log(result);
    		        var data = result['product'];               
    		        productId = data['id'];
    		        productName = data['name'];
    		        productDescription = data['description'];
    		        productAddtionalInformation = data['addtional_information'];
    		        productPriceAfterMaxCharacters = data['per_char_charge'];
    		        productMaxCharacter = data['max_characters'];
    		        productUse = data['nameplate_used'];
    		        productMaterial = data['material'];
    		        productCategory = data['category'];
    		        productCod = data['cod'];
    		        productLetterType = data['letter_type'];
    		        productFittingPlace = data['fitting_place'];
    		        productLength = data['length'];
    		        productHeight = data['height'];
                    productDepth = data['depth'];
    		        productWeight = data['weight'];
    		        productPrice = data['price'];
    		        productTrending = data['trending'];
    		        productNotes = data['notes'];
    		        
    		        productImage = imageUrl+data['images']["1"];
    		        productImage2 = imageUrl+data['images']["2"];
    		        productImage3 = imageUrl+data['images']["3"];
    		        productImage4 = imageUrl+data['images']["4"];
    		        productImage5 = imageUrl+data['images']["5"];
    		       	productPrice = "₹ "+ productPrice;
    
    		       	$("#pic-1 img").attr('src',productImage);
    		       	$("#pic-2 img").attr('src',productImage2);
    		       	$("#pic-3 img").attr('src',productImage3);
    		       	$("#pic-4 img").attr('src',productImage4);
    		       	$("#pic-5 img").attr('src',productImage5);
    		       	$('[data-target="#pic-1"]').find('img').attr('src', productImage);
    				$('[data-target="#pic-2"]').find('img').attr('src', productImage2);
    				$('[data-target="#pic-3"]').find('img').attr('src', productImage3);
    				$('[data-target="#pic-4"]').find('img').attr('src', productImage4);
    				$('[data-target="#pic-5"]').find('img').attr('src', productImage5);
    				$('.product-name').text(productName);
    				$('.product-description').text( productDescription);
    				$('.product-material').text( productMaterial);
    				$('.product-fitting-place').text(productFittingPlace);
    				$('.product-letter-type').text(productLetterType);
    				$('.product-max-characters').text(productMaxCharacter);
    				$('.product-length').text( productLength);
    				$('.product-height').text( productHeight);
                    $('.product-depth').text( productDepth);
    				$('.product-weight').text( productWeight);
    				$('.product-use').text( productUse);
    				$('.product-price').text( productPrice);
    				$('.product-additional-information').text( productAddtionalInformation);
                    $('.product-notes').text(productNotes);
                    $("#pic-1 img, #pic-2 img, #pic-3 img, #pic-4 img, #pic-5 img").wrap('<span style="display:inline-block"></span>').css('display', 'block').parent().zoom({	magnify: 0.3 });
       
    		    },
    		    error: function(xhr, resp, text) {
    		        console.log(xhr, resp, text);
    		    }
    		});
    
    	}
    	
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
    
    
    	
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
    
    
      
    });
</script>