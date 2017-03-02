
// create a wrapper around native canvas element (with id="c")
canvas = new fabric.Canvas('div1');
var text, text2, text3, text4;


function setup(){
	text = new fabric.Text('', { 
		left: 10, 
		top: 10,
		fontSize: 10,
		shadow: '3px 2px 4px rgba(0,0,0,0.7)'

	});
	
	canvas.add(text);
	text2 = new fabric.Text('', { 
		left: 10, 
		top: 50,
		fontSize: 10,
		shadow: '3px 2px 4px rgba(0,0,0,0.7)'

	});
	
	canvas.add(text2);
	
	text3 = new fabric.Text('', { 
		left: 10, 
		top: 90,
		fontSize: 10,
		shadow: '3px 2px 4px rgba(0,0,0,0.7)'

	});
	
	canvas.add(text3);
	
	text4 = new fabric.Text('', { 
		left: 10, 
		top: 130,
		fontSize: 10,
		shadow: '3px 2px 4px rgba(0,0,0,0.7)'

	});
	
	canvas.add(text4);
	

}



function addLineOfText(){
	
	text.setText('Hello World');
	canvas.renderAll();
}

function changeTextFontSize(){
	text.setFontSize(20);
	canvas.renderAll();
}
function changeTextColor(){
	text.setColor("red");
	canvas.renderAll();
}
function changeFontFamily(){
	text.setFontFamily("Arial");
	canvas.renderAll();
}

setup();


	$(document).ready(function (e) {
		
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

		function stringToColorCode($str) {
		  $code = substr($code, 0, 6);
		  return $code;
		}
		 id = getUrlParameter('id');
		rootUrl = 'http://localhost/work/api/public/';
		imageUrl = 'http://localhost/work/api/public/';
		maxCharacters = 0;
		basePrice = 0;
		maxFontSize = 0;
		priceAfterMaxCharacters = 0;
		priceAfterMaxFontSize = 0;
		noOfCharacters = 0;
		total = 0;
		maxCharPrice = 0;
		maxFontPrice = 0;
		giftWrapCharge = 0;
		motifs = [];
		fonts = [];
		$.ajax({
        url: rootUrl + "product/related/"+id,
        dataType: "json",
        success : function(result) {
            var html = "";
            var productId = "";
            var productName ="";
            
            //console.log(result);
            var data = result['products'];
            
            $.each(data, function (key, value) {
                productId = data[key]['id'];
                productName = data[key]['name'];
                productImage = imageUrl+data[key]['images'];

                html += '<div class="product col-sm-3 "><div class=" "><a href="customized.php?id='+productId+'" class="hoverImage block " ><img src="'+productImage+'" alt="'+productName+'" class="img-responsive padding10 "></a></div></div>'; 
            });
            
            $("#related-products-go-here").html(html);   
        
            $('.center').slick({
			infinite: true,
			autoplayspeed: 300,
			slidesToShow: 4,
			slidesToScroll: 1,
			dots: false,
			responsive: [
			{
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1,
		        infinite: true,
		        
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
        },
        error: function(xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });	

		
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
		        var productPriceAfterMaxFontSize = "";
		        var productMaxFontSize = "";
		        var productSubCategory = "";
		        productFontEffect = "";
		        var productColors ;
		        var productPatterns ;
		        //console.log(result);
		        var data = result['product'];               
		        productId = data['id'];
		        productName = data['name'];
		        productDescription = data['description'];
		        productAddtionalInformation = data['addtional_information'];
		        productPriceAfterMaxCharacters = data['per_char_charge'];
		        productMaxCharacter = data['max_characters'];
		        productPriceAfterMaxFontSize = data['price_after_max_font_size'];
		        productMaxFontSize = data['max_font_size'];
		        productUse = data['nameplate_used'];
		        productMaterial = data['material'];
		        productCategory = data['category'];
		        productSubCategory = data['subcategory'];
		        productCod = data['cod'];
		        productLetterType = data['letter_type'];
		        productFittingPlace = data['fitting_place'];
		        productLength = data['length'];
		        productHeight = data['height'];
		        productWeight = data['weight'];
		        productPrice = data['price'];
		        productTrending = data['trending'];
		        productFontEffect = data['font_effect'];
		        productColors = data['colors'];
		        productPatterns = data['patterns'];
		        motifs = data['motifs'];
		        fonts = data['fonts'];
		        productImage = imageUrl+data['images']["1"];
		        productImage2 = imageUrl+data['images']["2"];
		        productImage3 = imageUrl+data['images']["3"];
		        productImage4 = imageUrl+data['images']["4"];
		        productImage5 = imageUrl+data['images']["5"];

		       	basePrice = parseInt(productPrice);
		       	maxCharacters = parseInt(productMaxCharacter);
		       	priceAfterMaxCharacters = parseInt(productPriceAfterMaxCharacters);
		       	priceAfterMaxFontSize = parseInt(productPriceAfterMaxFontSize);
		       	maxFontSize = parseInt(productMaxFontSize);
		       	productPrice = "₹ "+ productPrice;
		       	if (productFontEffect == 1) {
		       		text.setShadow('none');
		       		text2.setShadow('none');
		       		text3.setShadow('none');
		       		text4.setShadow('none');
		       	}

		       	var color;
		       	$.each(productColors, function (key, value) {
		       		color += '<option value="'+value+'" style="background-color:'+value+';"></option>';

		       	});
		       	$.each(productPatterns, function (key, value) {
		       		patternImage = imageUrl + productPatterns[key]['pattern_path'];
		       		color += '<option value="'+patternImage+'" style="background-image:url('+patternImage+');"></option>';

		       	});
		       	$(".colors").html(color);
		       	$(".nameplate-base-price").text(productPrice);
		       	$("#product-dimentions").attr('src',productImage4);
		       

		       	//$("#div1").css('background-image','url('+productImage5+')');

		       	fabric.Image.fromURL(productImage5, function(img) {
				   img.set({width: canvas.width, height: canvas.height, originX: 'left', originY: 'top'});
				   canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas));
				});
		       	$("#nameplate-sample").attr('src',productImage);
				

		    },
		    error: function(xhr, resp, text) {
		        console.log(xhr, resp, text);
		    }
		}).done(function(){
			calculatePrice();
			setFontFace();
			
			canvas.renderAll();
		});


		$('#motifModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var modal = $(this);
		
            var html = "";
            var motifId = "";
            var motifName ="";
            var motifDescription = "";
            
            $.each(motifs, function (key, value) {
                motifId = motifs[key]['id'];
                motifName = motifs[key]['name'];
                motifDescription = motifs[key]['description'];
                motifImagePath = motifs[key]['motif_path'];
                html += '<div class="col-xs-12 col-sm-6 col-md-3"><div class="thumbnail"><img src="'+ imageUrl+motifImagePath+'" class="img-responsive"  alt=""><div class="caption"><h4>'+motifName+'</h4><p>'+ motifDescription+'</p><p><a href="#" class="btn btn-info select-motif" id="'+motifId+'"  role="button">Add </a> </p></div>  </div></div>';

            });



            modal.find("#motifs-data").html(html);
        	$('.select-motif').click(function(e){
				e.preventDefault();
				var id = this.id;
				addMotif(id);
				$("#motifModal").modal('toggle');
			});  
               
            
	  });
	$("body").on('click', ".removemotif", function() {
            $(".motifimage").html("");
    });

		//TOOLTIPS

		// Method 1 - uses 'data-toggle' to initialize
		$('[data-toggle="myToolTip"]').tooltip();   
		var HasTooltip = $('.hastooltip');
		/*$(".trigger-tooltips").click(function(e){
			e.preventDefault();
			$(".hastooltip").tooltip(funct);
		});*/
		$(".trigger-tooltips").on('click', function(e) {
		    e.preventDefault();
		    var isShowing = $(this).data('isShowing');
		    HasTooltip.removeData('isShowing');
		    if (isShowing !== 'true')
		    {
		      HasTooltip.not(this).tooltip('show');
		      $(this).data('isShowing', "true");
		      $(this).tooltip('show');
		    }
		    else
		    {
		      $(this).tooltip('show');
		    }

		  }).tooltip({
		    animation: true,
		    trigger: 'manual'
		  });

	    // RELATED PRODUCTS

		$('#clear').click(function(){
       		$('.inputSize').val('');
       		$("#line1 p").empty();
       		$("#line2 p").empty();
       		$("#line3 p").empty();
       		$("#line4 p").empty();
   		});

		
		//for making font bold
		$(".boldStyle").click(function() {
			var $items = $('.ui-selecting p');
			if($items.length){
				$(".ui-selecting p").toggleClass("bold");
			}
			else{
				 alert("Please select text ");
			}
		});



		//for making font bold
		$(".italicStyle").click(function() {
			var $items = $('.ui-selecting p');
			if($items.length){
	    		$(".ui-selecting p").toggleClass("italic");
	    	}
	    	else{
				 alert("Please select text");
			}	
		});

		//for making font Italic
		$(".underlineStyle").click(function() {
			
		});

		//for display input text on canvas
		$(".line-1-text").keyup(function(){
			
			var inputtext = $(this).val();
			var textLength = inputtext.length;
			text.setText(inputtext);
			canvas.renderAll();
	    	calculatePrice();
		});

		$(".line-2-text").keyup(function(){
			
			var inputtext = $(this).val();
			var textLength = inputtext.length;
			text2.setText(inputtext);
			canvas.renderAll();
	    	calculatePrice();
		});
		$(".line-3-text").keyup(function(){
			
			var inputtext = $(this).val();
			var textLength = inputtext.length;
			text3.setText(inputtext);
			canvas.renderAll();
	    	calculatePrice();
		});
		$(".line-4-text").keyup(function(){
			
			var inputtext = $(this).val();
			var textLength = inputtext.length;
			text4.setText(inputtext);
			canvas.renderAll();
	    	calculatePrice();
		});

		//for applying font-size on canvas text
		$(".line-1-font-size").change(function(){
		 	var fontSize = $(" #line1FontSize option:selected ").text();
			text.setFontSize(fontSize);
			canvas.renderAll();
		 	calculatePrice();
		 });

		$(".line-2-font-size").change(function(){
		 	var fontSize = $(" #line2FontSize option:selected ").text();
		 	text2.setFontSize(fontSize);
			canvas.renderAll();
		 	calculatePrice();
		 });

		$(".line-3-font-size").change(function(){
		 	var fontSize = $(" #line3FontSize option:selected ").text();
		 	text3.setFontSize(fontSize);
			canvas.renderAll();
		 	calculatePrice();
		 });

		$(".line-4-font-size").change(function(){
		 	var fontSize = $(" #line4FontSize option:selected ").text();
		 	text4.setFontSize(fontSize);
			canvas.renderAll();
		 	calculatePrice();
		 });

		
		$(".verticalCenter").click(function(e){
			e.preventDefault();
			if(canvas.getActiveGroup()){
				canvas.getActiveGroup().forEachObject(function(o){ o.centerV() });
				canvas.renderAll();
		    } else {
		      canvas.getActiveObject().centerV();
		      canvas.renderAll();
		    }
		 	
		 });
		$(".horizontalCenter").click(function(e){
			e.preventDefault();
			if(canvas.getActiveGroup()){
				canvas.getActiveGroup().forEachObject(function(o){ o.centerH() });
				canvas.renderAll();
		    } else {
		      canvas.getActiveObject().centerH();
		    }
		 	
		 });

		//for applying text color on canvas text
		$(".line-1-font-color").change(function(){
		 	var color = $(this).val();
		 	var isOk = /^#[0-9a-f]{3}(?:[0-9a-f]{3})?$/i.test(color);
			if (isOk) {	

				text.setColor(color);
				canvas.renderAll();
				$(this).css('background-color',color);
		 	}else{
		 		
		 		fabric.util.loadImage(color, function(img) {
			      text.fill = new fabric.Pattern({
			        source: img,
			        repeat: 'repeat'
			      });
			      canvas.renderAll();
			    });


		 	}
		 });

		$(".line-2-font-color").change(function(){
		 	var color = $(this).val();
		 	var isOk = /^#[0-9a-f]{3}(?:[0-9a-f]{3})?$/i.test(color);
			if (isOk) {	

				text2.setColor(color);
				canvas.renderAll();
				$(this).css('background-color',color);
		 	}else{
		 		
		 		fabric.util.loadImage(color, function(img) {
			      text2.fill = new fabric.Pattern({
			        source: img,
			        repeat: 'repeat'
			      });
			      canvas.renderAll();
			    });


		 	}
		 	
		 });

		$(".line-3-font-color").change(function(){
		 	var color = $(this).val();
		 	var isOk = /^#[0-9a-f]{3}(?:[0-9a-f]{3})?$/i.test(color);
			if (isOk) {	

				text3.setColor(color);
				canvas.renderAll();
				$(this).css('background-color',color);
		 	}else{
		 		
		 		fabric.util.loadImage(color, function(img) {
			      text3.fill = new fabric.Pattern({
			        source: img,
			        repeat: 'repeat'
			      });
			      canvas.renderAll();
			    });


		 	}
		 });

		$(".line-4-font-color").change(function(){
		 	var color = $(this).val();
		 	var isOk = /^#[0-9a-f]{3}(?:[0-9a-f]{3})?$/i.test(color);
			if (isOk) {	

				text4.setColor(color);
				canvas.renderAll();
				$(this).css('background-color',color);
		 	}else{
		 		
		 		fabric.util.loadImage(color, function(img) {
			      text4.fill = new fabric.Pattern({
			        source: img,
			        repeat: 'repeat'
			      });
			      canvas.renderAll();
			    });


		 	}
		 });


		//for applying font family on canvas text
		
		$(".line-1-font-family").change(function() {
    		text.setFontFamily($(this).val());
    		canvas.renderAll();
    	});

    	$(".line-2-font-family").change(function() {
    		text2.setFontFamily($(this).val());
    		canvas.renderAll();
    	});
    		
    	$(".line-3-font-family").change(function() {
    		text3.setFontFamily($(this).val());
    		canvas.renderAll();

		});

		$(".line-4-font-family").change(function() {
    		text4.setFontFamily($(this).val());
    		canvas.renderAll();

		});

		 $("#requestor-form").submit(function(e){
            e.preventDefault();
            var requestorName = $("#request-name").val();
            var requestorEmail = $("#request-email").val();
            var requestorContactNumber = $("#request-contact").val();
            var requestorRequirements = $("#request-requirements").val();
            var requestorData = new FormData();
            requestorData.append("name",requestorName);
            requestorData.append("email",requestorEmail);
            requestorData.append("contact_number",requestorContactNumber);
            requestorData.append("requirements",requestorRequirements);
            $.ajax({
                type : "POST",
                url: rootUrl + "requestdesign",
                /*dataType: "json",*/
                data: requestorData,
                contentType: false,
                processData: false,
                success : function(result) {
                    if (result["success"]) {
                        alert("request added");
                    }
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
        });
	
	});

	//price calculator
	$("#gift-wrap-my-item").addClass("not-added");
	$("#gift-wrap-my-item").change(function(){
		if ($(this).hasClass("not-added")) {
			$(this).removeClass("not-added");
			giftWrapCharge = 1000;
			$(this).addClass("added");
			calculatePrice();
		}else{
			$(this).removeClass("added");
			giftWrapCharge = 0;
			$(this).addClass("not-added");
			calculatePrice();
		}

	});

	function calculatePrice(){
		calculateNumberOfCharacters();
		calculateIfMoreThanFontSize();
		moreThanMaxCharacters = noOfCharacters - maxCharacters;
		
		maxCharPrice = moreThanMaxCharacters * priceAfterMaxCharacters;
		if (maxCharPrice > 0 ) {
			$(".nameplate-extra-char-charge").text("₹ "+maxCharPrice);	
			total = basePrice + maxCharPrice + maxFontPrice ;
			grandTotal = total + giftWrapCharge;
			$(".nameplate-extra-fontsize-charge").text("₹ "+maxFontPrice);
			$(".nameplate-gift-wrap").text("₹ "+giftWrapCharge);
			$(".nameplate-total").text("₹ "+grandTotal);
			$(".total-amount").text("₹ "+total);
			 
		}else{
			$(".nameplate-extra-char-charge").text("₹ "+"0");	
			total = basePrice + maxFontPrice ;
			grandTotal = total + giftWrapCharge;
			$(".nameplate-extra-fontsize-charge").text("₹ "+maxFontPrice);
			$(".nameplate-gift-wrap").text("₹ "+giftWrapCharge);
			$(".nameplate-total").text("₹ "+grandTotal);
			$(".total-amount").text("₹ "+total);

		}
	}


	function calculateNumberOfCharacters(){
		var line1Len = $(".line-1-text").val().length;
		var line2Len = $(".line-2-text").val().length;
		var line3Len = $(".line-3-text").val().length;
		var line4Len = $(".line-4-text").val().length;
		noOfCharacters = line1Len + line2Len + line3Len + line4Len ;
	}
	function calculateIfMoreThanFontSize(){
		var line1fontSize = parseInt($("#line1 p").css('font-size'));
		var line2fontSize = parseInt($("#line2 p").css('font-size'));
		var line3fontSize = parseInt($("#line3 p").css('font-size'));
		var line4fontSize = parseInt($("#line4 p").css('font-size'));
		var line1FontPrice = 0;
		var line2FontPrice = 0;
		var line3FontPrice = 0;
		var line4FontPrice = 0;

		if (noOfCharacters > 0 && (line1fontSize > maxFontSize) ) {
			var line1Len = $(".line-1-text").val().length;
			line1FontPrice = priceAfterMaxFontSize * line1Len;
		}
		if(noOfCharacters > 0 && (line2fontSize > maxFontSize)){
			var line2Len = $(".line-2-text").val().length;
			line2FontPrice = priceAfterMaxFontSize * line2Len;
		}
		if(noOfCharacters > 0 && (line3fontSize > maxFontSize)){
			var line3Len = $(".line-3-text").val().length;
			line3FontPrice = priceAfterMaxFontSize * line3Len;
		}
		
		if(noOfCharacters > 0 && (line4fontSize > maxFontSize)){
			var line4Len = $(".line-4-text").val().length;
			line4FontPrice = priceAfterMaxFontSize * line4Len;
		}
		maxFontPrice = line1FontPrice + line2FontPrice + line3FontPrice + line4FontPrice ;
	}


	
	function addMotif(id){
		$.ajax({    
            url: rootUrl + "motif/"+id,
            dataType: "json",
            success : function(result) {
                var html = "";
                var motifId = "";
                var motifName ="";
                var motifDescription = "";
                var data = result['motif'];
                motifId = data['id'];
                motifName = data['name'];
                motifDescription = data['description'];
                motifImagePath = data['motif_path'];
	              
                fabric.Image.fromURL(imageUrl+motifImagePath, function(oImg) {
                	oImg.scale(0.1).setFlipX(true);
				  	canvas.add(oImg);
				});
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
	}	

    $.ajax({
        url: rootUrl + "products/nameplate",
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
            var productNotes ="";
            //console.log(result);
            var data = result['products'];
              	
            var categories = [];
            $.each(data, function (key, value) {
                productCategory = data[key]['category'];
                productSubCategory = data[key]['subcategory'];
                if($.inArray(productSubCategory, categories) < 0){
                	categories.push(productSubCategory);
                }
            });
             
			var i = 1;           
			html+='<div class="panel-group" id="accordion" >';	            
            $.each(categories, function(key, value){
            	
            	html+='<div class="panel panel-default"><div class="panel-heading "  ><a data-toggle="collapse" data-parent="#accordion" href="#collapse-'+i+'" style="text-decoration:none;"><h4 class="panel-title">'+value+'</h4></a></div><div id="collapse-'+i+'" class="panel-collapse collapse in"><div class="panel-body"><ul>';

				var currentSubcategory = value;
            	$.each(data, function (key, value){
            		productSubCategory = data[key]['subcategory'];

            		if (productSubCategory == currentSubcategory) {
	            		productId = data[key]['id'];
	                	productName = data[key]['name'];
	                	
	                	productImage = imageUrl+data[key]['images']["1"];
	                	html+='<li><a class="thumb" href="customized.php?id='+productId+'">'+productName+'<span><img src="'+productImage+'" class="img-responsive" alt="'+productName+'"></span></a></li>';
                	}
            	});
            	html+='</ul></div></div>';
            	i++;
            });  
            html+='</div>';
            $("#nameplates-go-here").html(html); 
        
            
        },
        error: function(xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });


    function setFontFace(){
    	var html = "";
    	var style = "";
    	var fontId = "";
    	var fontName = "";
    	var fontPath = "";
    	style = "<style type=\"text/css\">";
    	$.each(fonts, function(key, value){
    		fontId = fonts[key]['id'];
            fontName = fonts[key]['name'];
            fontPath = fonts[key]['filepath'];
             style += "@font-face {\n" +
                                "\tfont-family: \""+fontName+"\";\n" + 
                                "\tsrc: local('☺'), url('"+imageUrl+fontPath+"') format('opentype');\n" + 
                            "}\n" ; 
                        
            html += '<option style="font-family:'+fontName+';" value="'+fontName+'">'+fontName+'</option>';

    	});
    	style += "</style>";
		$("head").prepend(style);
		$(".line-1-font-family").html(html);
		$(".line-2-font-family").html(html);
		$(".line-3-font-family").html(html);
		$(".line-4-font-family").html(html);
			
    }
    
    $('#say-cheese').on('show.bs.modal', function (event) {

		 if(!window.localStorage){alert("This function is not supported by your browser."); return;}
		    // to PNG
		   $("#snapshot").attr('src', canvas.toDataURL('png') );
           
	});

	function deleteObjects(){
		var activeObject = canvas.getActiveObject(),
	    activeGroup = canvas.getActiveGroup();
	    if (activeObject) {
	        if (confirm('Are you sure?')) {
	            canvas.remove(activeObject);
	        }
	    }
	    else if (activeGroup) {
	        if (confirm('Are you sure?')) {
	            var objectsInGroup = activeGroup.getObjects();
	            canvas.discardActiveGroup();
	            objectsInGroup.forEach(function(object) {
	            canvas.remove(object);
	            });
	        }
	    }
	}
    $("#delete-selected-objects").click(function(e){
		e.preventDefault();
		deleteObjects();

    });
    canvas.on('object:moving', function (e) {
        var obj = e.target;
         // if object is too big ignore
        if(obj.currentHeight > obj.canvas.height || obj.currentWidth > obj.canvas.width){
            return;
        }        
        obj.setCoords();        
        // top-left  corner
        if(obj.getBoundingRect().top < 0 || obj.getBoundingRect().left < 0){
            obj.top = Math.max(obj.top, obj.top-obj.getBoundingRect().top);
            obj.left = Math.max(obj.left, obj.left-obj.getBoundingRect().left);
        }
        // bot-right corner
        if(obj.getBoundingRect().top+obj.getBoundingRect().height  > obj.canvas.height || obj.getBoundingRect().left+obj.getBoundingRect().width  > obj.canvas.width){
            obj.top = Math.min(obj.top, obj.canvas.height-obj.getBoundingRect().height+obj.top-obj.getBoundingRect().top);
            obj.left = Math.min(obj.left, obj.canvas.width-obj.getBoundingRect().width+obj.left-obj.getBoundingRect().left);
    }



});

