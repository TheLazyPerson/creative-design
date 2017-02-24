<? include "header.php" ?>

	<!--  about us content-->
	<div class="container margintop40">	<!--starting of product grid -->
		<div class="row marginbottom40" ><!--starting of product main row -->
			<div class="col-sm-3 sidemenu" ><!--starting of heading -->
				<div class="" >
    				<div class="card marginbottom40" >
    					<div class=" priceRangeCheckbox  ">
    						<div class="headingContent padding10 ">
    	            			<h4>Explore </h4>
    	        			</div>
            				<ul class="paddingtop10 paddingbottom10 " id="product-categories">
                						
                            </ul>
                		</div>
    				</div>

    				
            		<div class="card priceRangeCheckbox  marginbottom40" >
            				<div class="headingContent padding10">
    		            			<h4>Price Range</h4>
    		        			</div>
                            <div class="padding20">
                                
                                <div id="slider-container"></div>
                                <p>
                                  <label for="amount">Price range:</label>
                                  <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
                                </p>
                            </div>
                		  
    				</div>
				</div>
			</div><!--end of heading -->

			<div class="col-sm-9"><!--starting of product col -->
                <section class="preference-filter" >
                    <div class="col-sm-12 marginbottom40 paddingbottom40 paddingtop20" style="background-color: #ccc !important; ">
                        <div class="col-sm-12">
                            <h3 class="text-center">Which Nameplate is suitable for your House ?</h3>
                        </div>
                        <div class="col-sm-12 margintop10">
                            <div class="col-sm-3">
                                <div class="dropdown">
                                    <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nameplate Use
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Indoor</a></li>
                                        <li><a href="#">Outdoor</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="dropdown">
                                    <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                    Fitting place
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Door</a></li>
                                        <li><a href="#">Wall</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="dropdown">
                                    <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nameplate Material
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="materials-go-here" aria-labelledby="dropdownMenu1">
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-info btn-block" type="button">
                                Check
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
        
				<div class="row  products-go-here" id="MixItUp"><!--starting of product row 1 -->
					
				</div>	<!--ending of product row 1 -->
				<div class="col-sm-12 more text-center">
					<a href="#">
						<button type="button" class="btn btn-info text-center ">Load More</button>
					</a>
				</div>
			</div><!--ending of product col -->
			
		</div>	<!--ending of product main row -->
	</div><!--ending of product grid -->

     <!--Product  model start --> 
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
              <div class="row">
                  <div class="col-sm-5 " > 
                    <div class="proImage productBorder  padding20" >
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="" /></div>
                          <div class="tab-pane" id="pic-2"><img src="" /></div>
                          <div class="tab-pane" id="pic-3"><img src="" /></div>
                          <div class="tab-pane" id="pic-4"><img src="" /></div>
                          <div class="tab-pane" id="pic-5"><img src="" /></div>
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
            
            
          <h3 class="product-price"> </h3>
          <p class="drakGreay product-description">
             
          </p>
          <div class="clearfix"></div>
          
          <a type="button" class="btn btn-info text-center should-change-text">Add to Cart</a>
          <a href="#" class="btn btn-primary" ><i class="fa fa-heart" aria-hidden="true"></i></a>
          <br />
         <br />
          <div class="col-sm-6 hidden">
            <h4>Max. Characters/row: <span class="product-max-characters">12</span></h4>
          </div>

                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td class="col-sm-2 black ">In Stock:</td>
                        <td class="col-sm-2 ">Yes</td>
                        <td class="col-sm-2 black">Material</td>
                        <td class="col-sm-2 product-material"></td>
                      </tr>
                      <tr>
                        <td class="col-sm-2 black">COD</td>
                        <td class="col-sm-2 ">No</td>
                        <td class="col-sm-2 black should-hidden">Letters</td>
                        <td class="col-sm-2 product-letter-type should-hidden"></td>
                      </tr>
                      <tr>
                        <td class="col-sm-2 black should-hidden">Fitting Place</td>
                        <td class="col-sm-2 product-fitting-place should-hidden"></td>
                        <td class="col-sm-2 black should-hidden">Nameplate Use </td>
                        <td class="col-sm-2 product-use should-hidden"></td>
                      </tr>
                  </tbody>
                  </table>
                  <table class="table table-bordered ">
                    <tbody>    
                      <tr>
                        <td class="col-sm-2 black ">Length</td>
                        <td class="col-sm-2 product-length"></td>
                        <td class="col-sm-2 black">Height</td>
                        <td class="col-sm-2 product-height"></td>
                        <td class="col-sm-2 black">Weight</td>
                        <td class="col-sm-2 product-weight"></td>
                      </tr>        
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td class="col-md-12">
                          <div class=" black">Note:</div>
                          <h5 class="product-notes">
                            
                              
                          </h5>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
            <!--<div class="modal-footer">
                <div class="col-sm-12">

                </div>
            </div>-->
        </div>
    </div>



<? include "footer.php" ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-slider.js"></script>
  <script src="js/common.js"></script>
  <script src="js/jquery-ui-slider.min.js"></script>
  <script type="text/javascript">
   

        
    $(document).ready(function(){

    	var rootUrl = 'http://localhost/work/api/public/';
    	var imageUrl = 'http://localhost/work/api/public/';
        product = "";
        productCount = 0;
        minPrice = 0;
        maxPrice = 0;
        var materials = [];

        function addMaterial(materialName){
            if($.inArray(materialName, materials) < 0){
                materials.push(materialName);
            }
        }



      $.ajax({
            
            url: rootUrl + "categories",
            dataType: "json",
            success : function(result) {
                var html = "";
                var categoryId = "";
                var categoryName ="";
                var categoryDescription = "";
                var subcategoryId = "";
                var subcategoryName ="";
                var subcategoryDescription = "";

                var subcategories;
                //console.log(result);
                var data = result['categories'];
                
                $.each(data, function (key, value) {
                    
                    categoryId = data[key]['id'];
                    categoryName = data[key]['name'];
                    categoryDescription = data[key]['description'];

                    productCategoryFiler = categoryName.replace(/\s+/g, '-').toLowerCase();
                   
                    html += '<li><a href="#" class="filters" data-filter=".'+productCategoryFiler+'" >  '+categoryName+'</a><ul>';
                    subcategories = data[key]["subcategories"];
                    $.each(subcategories, function (key, value) {
                      
                      subcategoryId = subcategories[key]['id'];
                      subcategoryName = subcategories[key]['name'];
                      subcategoryDescription = subcategories[key]['description'];
                      productSubCategoryFiler = subcategoryName.replace(/\s+/g, '-').toLowerCase();
                      html += '<li><a  href="#" class="filters" data-filter=".'+productSubCategoryFiler+'" >  '+subcategoryName+'</a></li>';
                    });
                    html+='</ul></li>'; 
                });
                $("#product-categories").html(html);
                
                
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });

      



      $.when(

        $.ajax({
            url: rootUrl + "products/nameplate",
            dataType: "json",
            success : function(result) {
                var productId = "";
                var productName ="";
                var productDescription = "";
                var productAddtionalInformation ="";
                var productPriceAfterMaxCharacters ="";
                var productMaxCharacter ="";
                var productMaterial = "";
                var productCategory = "";
                var productSubCategory = "";
                var productCod = "";
                var productLetterType ="";
                var productFittingPlace ="";
                var productLength ="";
                var productHeight = "";
                var productWeight = "";
                var productPrice = "";
                var productTrending ="";
                var productNotes ="";
                var productImage = "";
                //console.log(result);
                var data = result['products'];
                
                $.each(data, function (key, value) {
                    productImage = "";
                    productImage2 = "";
                    productImage3 = "";
                    productImage4 = "";
                    productImage5 = "";
                    productId = data[key]['id'];
                    productName = data[key]['name'];
                    productDescription = data[key]['description'];
                    productAddtionalInformation = data[key]['addtional_information'];
                    productPriceAfterMaxCharacters = data[key]['per_char_charge'];
                    productMaxCharacter = data[key]['max_characters'];
                    productUse = data[key]['nameplate_used'];
                    productMaterial = data[key]['material'];
                    productCategory = data[key]['category'];
                    productSubCategory = data[key]['subcategory'];
                    productCod = data[key]['cod'];
                    productLetterType = data[key]['letter_type'];
                    productFittingPlace = data[key]['fitting_place'];
                    productLength = data[key]['length'];
                    productHeight = data[key]['height'];
                    productWeight = data[key]['weight'];
                    productPrice = data[key]['price'];
                    productTrending = data[key]['trending'];
                    productNotes = data[key]['notes'];
                    priceInInt = parseInt(productPrice);
                    if (minPrice > priceInInt) {
                        minPrice = priceInInt;
                    }
                    if (maxPrice < priceInInt) {
                        maxPrice = priceInInt;
                    }
                    addMaterial(productMaterial);
                    productCategoryFiler = productCategory.replace(/\s+/g, '-').toLowerCase();
                    productSubCategoryFiler = productSubCategory.replace(/\s+/g, '-').toLowerCase();
                    
                    productImage = imageUrl+data[key]['images']["1"];
                    productImage2 = imageUrl+data[key]['images']["2"];
                    productImage3 = imageUrl+data[key]['images']["3"];
                    productImage4 = imageUrl+data[key]['images']["4"];
                    productImage5 = imageUrl+data[key]['images']["5"];
               

                    product += '<div class="mix col-sm-4 product '+productCategoryFiler+' '+productSubCategoryFiler+' marginbottom40" data-price="'+productPrice+'" data-category="'+productCategory+'" ><div class="col-sm-12 onlyPaddingRight"> <div class="card1 marginbottom10">   <a href="#" class="hoverImage block nameplate " data-toggle="modal" data-target="#myModal2"  data-title="'+productName+'" data-price="'+productPrice+'"  data-description="'+productDescription+'"  data-material="'+productMaterial+'" data-fitting-place="'+productFittingPlace+'" data-letter-type="'+productLetterType+'" data-length="'+productLength+'" data-height="'+productHeight+'" data-weight="'+productWeight+'" data-notes="'+productNotes+'" data-use="'+productUse+'" data-image1="'+productImage+'" data-image2="'+productImage2+'" data-image3="'+productImage3+'" data-image4="'+productImage4+'" data-image5="'+productImage5+'"> <img src="'+productImage+'" class="img-responsive padding10 "> <div class="block-caption "> <i class="fa fa-eye" aria-hidden="true"></i> &nbsp Quick View </div></a> <div class="padding10"> <h4>'+productName+'</h4> <div class="starIcon"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <h5>₹ '+productPrice+'</h5> <p>'+productDescription+'</p></div><div> <div class="row text-center"> <a href="#" class="btn btn-primary"> <i class="fa fa-heart" aria-hidden="true"></i> </a> <a href="displayProduct.php?id='+productId+'&&type=2" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"> Details</i> </a>  <a class="btn btn-primary" href="customized.php?id='+productId+'"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Customized </a> </div></div></div></div></div></div>'; 
                });
                
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        }),
      $.ajax({
              
            url: rootUrl + "products/normal",
            dataType: "json",
            success : function(result) {
                
              var productId = "";
                var productName ="";
                var productPrice = "";
                var productImage ="";
                var productDescription ="";
                var productCategory ="";
                var productSubCategory ="";
                var productLength ="";
                var productWidth ="";
                var productWeight ="";
                var productCod = "";
                var productStatus = "";
                var productNotes = "";
                //console.log(result);
                var total_count = result["product_count"];
                var data = result['products'];
                
                $.each(data, function (key, value) {
                    productId = data[key]['id'];
                    productName = data[key]['name'];
                    productPrice = data[key]['price'];
                    productMaterial = data[key]['material'];
                    productCategory = data[key]['category'];
                    productSubCategory = data[key]['subcategory'];
                    productLength = data[key]['length'];
                    productWidth = data[key]['height'];
                    productWeight = data[key]['weight'];
                    productDescription = data[key]['description'];
                    productCod = data[key]['cod'];
                    productStatus = data[key]['status'];
                    productNotes = data[key]['notes'];
                    productImage = imageUrl+data[key]['images']["1"];
                    productImage2 = imageUrl+data[key]['images']["2"];
                    productImage3 = imageUrl+data[key]['images']["3"];
                    productImage4 = imageUrl+data[key]['images']["4"];
                    productImage5 = imageUrl+data[key]['images']["5"];
                    priceInInt = parseInt(productPrice);
                    if (minPrice > priceInInt) {
                        minPrice = priceInInt;
                    }
                    if (maxPrice < priceInInt) {
                        maxPrice = priceInInt;
                    }

                    addMaterial(productMaterial);

                    productCategoryFiler = productCategory.replace(/\s+/g, '-').toLowerCase();
                    productSubCategoryFiler = productSubCategory.replace(/\s+/g, '-').toLowerCase();

                    product += '<div class=" mix col-sm-4 product  '+productCategoryFiler+' '+productSubCategoryFiler+' marginbottom40" data-price="'+productPrice+'" data-category="'+productCategory+'" ><div class="col-sm-12 onlyPaddingRight"><div class="card1 "><a href="#" class="hoverImage block product" data-toggle="modal" data-target="#myModal2" data-title="'+productName+'" data-price="'+productPrice+'" data-description="'+productDescription+'" data-material="'+productMaterial+'"  data-length="'+productLength+'"  data-width="'+productWidth+'"  data-weight="'+productWeight+'"  data-image1="'+productImage+'" data-image2="'+productImage2+'" data-image3="'+productImage3+'" data-image4="'+productImage4+'" data-image5="'+productImage5+'" data-notes="'+productNotes+'" ><img src="'+ productImage +'" class="img-responsive padding10 "><div class="block-caption  "><i class="fa fa-eye" aria-hidden="true"></i> &nbsp; Quick View</div></a> <div class="padding10 paddingtop2 0"><h4>'+ productName +'</h4><div class="starIcon"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><h5> ₹'+ productPrice +'</h5><p>'+ productDescription +'</p></div><div><div class="row text-center"><a href="#" class="btn btn-primary"><i class="fa fa-heart" aria-hidden="true"></i></a> <a class="btn btn-primary" href="displayProduct.php?id='+productId+'&&type=1"><i class="fa fa-plus" aria-hidden="true"> Details</i></a> <a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"> Add to Cart</i></a> </div></div></div></div></div></div>'; 
                
                });
                
  
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        })

      ).then(function() {
        $('.products-go-here').html(product);
        var html = "";
        $.each(materials, function(key, value){
            html += '<li><a href="#">'+value+'</a></li>';
        });
        $("#materials-go-here").html(html);
        
        $(".dropdown-menu li a").click(function(){
          $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
          $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
        });

        $('#slider-container').slider({
          range: true,
          min: minPrice,
          max: maxPrice,
          values: [minPrice, maxPrice],
          create: function() {
                
              $("#amount").val("₹ "+minPrice+" - ₹ "+maxPrice+"");
          },
          slide: function (event, ui) {
              $("#amount").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
              var mi = ui.values[0];
              var mx = ui.values[1];
              filterSystem(mi, mx);
          }
        })
        $( "#amount" ).val( "₹ " + minPrice +" - ₹ " + maxPrice );
        function filterSystem(minPrice, maxPrice) {
            $(".mix").hide().filter(function() {
                var price = parseInt($(this).data("price"), 10);
                return price >= minPrice && price <= maxPrice;
            }).show();
        }


      });




      $('#myModal2').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        if (button.hasClass("nameplate")) {
          $(".should-visible").addClass("hidden");
          $(".should-hidden").removeClass("hidden");
          var name = button.data('title');
          var description = button.data('description');
          var material = button.data('material');
          var fittingPlace = button.data('fitting-place');
          var letterType = button.data('letter-type');
          var length = button.data('length');
          var height = button.data('height');
          var weight = button.data('weight');
          var notes = button.data('notes');
          var use = button.data('use');
          var price = "₹"+button.data('price');


         
          var image1 = button.data('image1');
          var image2 = button.data('image2');
          var image3 = button.data('image3');
          var image4 = button.data('image4');
          var image5 = button.data('image5');
          var modal = $(this);
          modal.find('.product-name').text( name);
          modal.find('.product-description').text( description);
          modal.find('.product-material').text( material);
          modal.find('.product-fitting-place').text( fittingPlace);
          modal.find('.product-letter-type').text( letterType);
          modal.find('.product-length').text( length);
          modal.find('.product-height').text( height);
          modal.find('.product-weight').text( weight);
          modal.find('.product-use').text( use);
          modal.find('.product-notes').text( notes);
          modal.find('.product-price').text( price);
          modal.find('#pic-1 img').attr('src', image1);
          modal.find('#pic-2 img').attr('src', image2);
          modal.find('#pic-3 img').attr('src', image3);
          modal.find('#pic-4 img').attr('src', image4);
          modal.find('#pic-5 img').attr('src', image5);

          modal.find('[data-target="#pic-1"]').find('img').attr('src', image1);
          modal.find('[data-target="#pic-2"]').find('img').attr('src', image2);
          modal.find('[data-target="#pic-3"]').find('img').attr('src', image3);
          modal.find('[data-target="#pic-4"]').find('img').attr('src', image4);
          modal.find('[data-target="#pic-5"]').find('img').attr('src', image5);
          modal.find('.modal-body input').val(name);
        }else if(button.hasClass("product")){
          $(".should-hidden").addClass("hidden");
          $(".should-visible").removeClass("hidden");
          var name = button.data('title');
          var description = button.data('description');
          var material = button.data('material');
          var use = button.data('use');
          var price = "₹"+button.data('price');
          var length = button.data('length');
          var height = button.data('height');
          var weight = button.data('weight');
          var notes = button.data('notes');

          var image1 = button.data('image1');
          var image2 = button.data('image2');
          var image3 = button.data('image3');
          var image4 = button.data('image4');
          var image5 = button.data('image5');
          var modal = $(this);

          modal.find('.product-name').text( name);
          modal.find('.product-description').text( description);
          modal.find('.product-material').text( material);
          modal.find('.product-price').text( price);
          modal.find('.product-length').text( length);
          modal.find('.product-height').text( height);
          modal.find('.product-weight').text( weight);
          modal.find('.product-notes').html( notes);
          modal.find('#pic-1 img').attr('src', image1);
          modal.find('#pic-2 img').attr('src', image2);
          modal.find('#pic-3 img').attr('src', image3);
          modal.find('#pic-4 img').attr('src', image4);
          modal.find('#pic-5 img').attr('src', image5);

          modal.find('[data-target="#pic-1"]').find('img').attr('src', image1);
          modal.find('[data-target="#pic-2"]').find('img').attr('src', image2);
          modal.find('[data-target="#pic-3"]').find('img').attr('src', image3);
          modal.find('[data-target="#pic-4"]').find('img').attr('src', image4);
          modal.find('[data-target="#pic-5"]').find('img').attr('src', image5);

        }
        
        
      })
    	/*var width = $('.affixed').width();
    	$(window).scroll(function () {
	          if ($(this).scrollTop() > 50) {
	              $('.back-to-top').fadeIn();
	          } else {
	              $('.back-to-top').fadeOut();
	          }
	          if ($(this).scrollTop() > 100) {
	             
    			$('.affix').attr('width', width).attr('top' : 0);

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
    

       
        $('.slider').slider();

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
        */
    
});
</script>  