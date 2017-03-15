
    $(document).ready(function(){
      var rootUrl = 'http://localhost/work/api/public/';
      var imageUrl = 'http://localhost/work/api/public/';
      var homeImgURLs = [];
     
      //scroll to top
      $(window).scroll(function () {
          if ($(this).scrollTop() > 500) {
              $('.back-to-top').fadeIn();
          } else {
              $('.back-to-top').fadeOut();
          }
      });
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
         $.ajax({
            url: rootUrl + "showcase",
            dataType: "json",
            success : function(result) {
                var imagePath = "";
                var data = result['showcase'];
                var selector = "#showcase"
                $.each(data, function (key, value) {
                    imagePath = data[key]['image_path'];
                    $(selector+key).attr('src', imageUrl+imagePath);
                });
                
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
     
        $.ajax({
            url: rootUrl + "timeline",
            dataType: "json",
            success : function(result) {
                var imagePath = "";
                var data = result['timeline'];
                
                $.each(data, function (key, value) {
                    imagePath = data[key]['image_path'];
                    homeImgURLs.push({
                      src: imageUrl+imagePath
                    });
                });
                //timeline
                $(".wrapper").vegas({
                    transition: 'swirlLeft',
                    transitionDuration: 2000,
                    slides: homeImgURLs
                    
                });
  
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });

         $.ajax({
            url: rootUrl + "ourrecentwork",
            dataType: "json",
            success : function(result) {
                var imagePath = "";
                var data = result['ourrecentwork'];
                var selector = "#recent"
                $.each(data, function (key, value) {
                    imagePath = data[key]['image_path'];
                    $(selector+key).attr('src', imageUrl+imagePath);
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
                    var id = data[key]['id'];
                    var short_description = data[key]['short_description'];
                    var image_source = imageUrl+data[key]['image_path'];
                    $(selector+i+" .title").text(data[key]['title'] );
                    $(selector+i+" .content").text(short_description.slice(0,100) );
                    $(selector+i+" .released").text(data[key]['released'] );
                    $(selector+i+" .image").attr('src',image_source);
                    $("#blog-link"+i).attr('href',"displayBlog.php?id="+id);
                    i++;
                });
               
                
  
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
     
        $.ajax({
            
            url: rootUrl + "products/featured",
            dataType: "json",
            success : function(result) {
                var html = "";
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

                    html += '<div class="col-sm-3 product"><div class="col-sm-12 onlyPaddingRight"><div class="card1 marginbottom10"><a href="#" class="hoverImage block product" data-toggle="modal" data-target="#myModal2"  data-id='+productId+' data-title="'+productName+'" data-price="'+productPrice+'" data-description="'+productDescription+'" data-material="'+productMaterial+'"  data-length="'+productLength+'"  data-width="'+productWidth+'"  data-weight="'+productWeight+'"  data-image1="'+productImage+'" data-image2="'+productImage2+'" data-image3="'+productImage3+'" data-image4="'+productImage4+'" data-image5="'+productImage5+'" data-notes="'+productNotes+'" ><img src="'+ productImage +'" class="img-responsive padding10 "><div class="block-caption  "><i class="fa fa-eye" aria-hidden="true"></i> &nbsp; Quick View</div></a> <div class="padding10 paddingtop2 0"><h4>'+ productName +'</h4><div class="starIcon"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><h5> ₹'+ productPrice +'</h5><p>'+ productDescription +'</p></div><div><div class="row text-center"><a href="#" class="btn btn-primary"><i class="fa fa-heart" aria-hidden="true"></i></a> <a class="btn btn-primary" href="displayProduct.php?id='+productId+'&&type=1"><i class="fa fa-plus" aria-hidden="true"> Details</i></a> <button class="btn btn-primary add-to-cart-product" id="'+productId+'"  ><i class="fa fa-shopping-cart" aria-hidden="true"> Add to Cart</i></button> </div></div></div></div></div></div>'; 
                });
                $('#featured').html(html);
                $(".add-to-cart-product").click(function(e){
                    
                    e.preventDefault();
                    var id = this.id;
                    addToCart(id, 1);
                    loadBasicCart();
                });
                 $('#featured').slick({
                  infinite: true,
                  autoplayspeed: 300,
                  slidesToShow: 4,
                  slidesToScroll: 4,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
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
            url: rootUrl + "products/trending",
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
                    productCod = data[key]['cod'];
                    productLetterType = data[key]['letter_type'];
                    productFittingPlace = data[key]['fitting_place'];
                    productLength = data[key]['length'];
                    productHeight = data[key]['height'];
                    productWeight = data[key]['weight'];
                    productPrice = data[key]['price'];
                    productTrending = data[key]['trending'];
                    productNotes = data[key]['notes'];
                    
                    productImage = imageUrl+data[key]['images']["1"];
                    productImage2 = imageUrl+data[key]['images']["2"];
                    productImage3 = imageUrl+data[key]['images']["3"];
                    productImage4 = imageUrl+data[key]['images']["4"];
                    productImage5 = imageUrl+data[key]['images']["5"];


                    html += '<div class="col-sm-3 product " ><div class="col-sm-12 onlyPaddingRight"> <div class="card1 marginbottom10">   <a href="#" class="hoverImage block nameplate " data-id="'+productId+'" data-toggle="modal" data-target="#myModal2"  data-title="'+productName+'" data-price="'+productPrice+'"  data-description="'+productDescription+'"  data-material="'+productMaterial+'" data-fitting-place="'+productFittingPlace+'" data-letter-type="'+productLetterType+'" data-length="'+productLength+'" data-height="'+productHeight+'" data-weight="'+productWeight+'" data-notes="'+productNotes+'" data-use="'+productUse+'" data-image1="'+productImage+'" data-image2="'+productImage2+'" data-image3="'+productImage3+'" data-image4="'+productImage4+'" data-image5="'+productImage5+'"> <img src="'+productImage+'" class="img-responsive padding10 "> <div class="block-caption "> <i class="fa fa-eye" aria-hidden="true"></i> &nbsp Quick View </div></a> <div class="padding10"> <h4>'+productName+'</h4> <div class="starIcon"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <h5>₹ '+productPrice+'</h5> <p>'+productDescription+'</p></div><div> <div class="row text-center"> <a href="#" class="btn btn-primary"> <i class="fa fa-heart" aria-hidden="true"></i> </a> <a href="displayProduct.php?id='+productId+'&&type=2" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"> Details</i> </a>  <a class="btn btn-primary" href="customized.php?id='+productId+'"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Customized </a> </div></div></div></div></div></div>'; 
                });
                $('#trending').html(html);
                $('#trending').slick({
                  infinite: true,
                  autoplayspeed: 300,
                  slidesToShow: 4,
                  slidesToScroll: 4,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
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
                
                $.each(data, function (key, value) {
                    productId = data[key]['id'];
                    productName = data[key]['name'];
                    productDescription = data[key]['description'];
                    productAddtionalInformation = data[key]['addtional_information'];
                    productPriceAfterMaxCharacters = data[key]['per_char_charge'];
                    productMaxCharacter = data[key]['max_characters'];
                    productUse = data[key]['nameplate_used'];
                    productMaterial = data[key]['material'];
                    productCategory = data[key]['category'];
                    productCod = data[key]['cod'];
                    productLetterType = data[key]['letter_type'];
                    productFittingPlace = data[key]['fitting_place'];
                    productLength = data[key]['length'];
                    productHeight = data[key]['height'];
                    productWeight = data[key]['weight'];
                    productPrice = data[key]['price'];
                    productTrending = data[key]['trending'];
                    productNotes = data[key]['notes'];
                    productImage = imageUrl+data[key]['images']["1"];
                    productImage2 = imageUrl+data[key]['images']["2"];
                    productImage3 = imageUrl+data[key]['images']["3"];
                    productImage4 = imageUrl+data[key]['images']["4"];
                    productImage5 = imageUrl+data[key]['images']["5"];


                    html += '<div class="col-sm-3 product " ><div class="col-sm-12 onlyPaddingRight"> <div class="card1 marginbottom10"> <a href="#" class="hoverImage block nameplate " data-toggle="modal" data-target="#myModal2" data-id='+productId+' data-title="'+productName+'" data-price="'+productPrice+'" data-description="'+productDescription+'" data-material="'+productMaterial+'" data-fitting-place="'+productFittingPlace+'" data-letter-type="'+productLetterType+'" data-length="'+productLength+'" data-height="'+productHeight+'" data-weight="'+productWeight+'" data-notes="'+productNotes+'"  data-use="'+productUse+'" data-image1="'+productImage+'" data-image2="'+productImage2+'" data-image3="'+productImage3+'" data-image4="'+productImage4+'" data-image5="'+productImage5+'"> <img src="'+productImage+'" class="img-responsive padding10 "> <div class="block-caption "> <i class="fa fa-eye" aria-hidden="true"></i> &nbsp Quick View </div></a> <div class="padding10"> <h4>'+productName+'</h4> <div class="starIcon"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <h5>₹ '+productPrice+'</h5> <p>'+productDescription+'</p></div><div> <div class="row text-center"> <a href="#" class="btn btn-primary"> <i class="fa fa-heart" aria-hidden="true"></i> </a> <a href="displayProduct.php?id='+productId+'&&type=2" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"> Details</i> </a>  <a class="btn btn-primary" href="customized.php?id='+productId+'"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Customized </a> </div></div></div></div></div></div>'; 
                });
                $('#customized').html(html);
                 $('#customized').slick({
                  infinite: true,
                  autoplayspeed: 300,
                  slidesToShow: 4,
                  slidesToScroll: 4,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
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


$('#myModal2').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  if (button.hasClass("nameplate")) {
    $(".should-visible").addClass("hidden");
    $(".should-hidden").removeClass("hidden");
    var id = button.data('id');
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
    modal.find('.customize').attr('href', 'customized.php?id='+id);
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
    var id = button.data('id');
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
    modal.find('.add-product').attr("id", id);
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
    $(".add-to-cart-product").click(function(e){
                    
        e.preventDefault();
        var id = this.id;
        addToCart(id, 1);
        loadBasicCart();
    });
  }
  
  
})

       
$('#mainNav').affix({
  offset: {
    top: 100
  }
});

$(window).scroll(function(){
  var threshold = 200; // number of pixels before bottom of page that you want to start fading
  var op = (($(document).height() - $(window).height()) - $(window).scrollTop()) / threshold;
  if( op <= 0 ){
    $("#top-line").hide();
  } else {
    $("#top-line").show();
  }
  $("#top-line").css("opacity", op ); 
});

  
        // $('#myModal2').appendTo("body");


  $('.collapse').on('shown.bs.collapse', function (e) 
  {
    $('.collapse').not(this).removeClass('in');
  });

  $('[data-toggle=collapse]').click(function (e) 
  {
    $('[data-toggle=collapse]').parent('li').removeClass('active');
    $(this).parent('li').toggleClass('active');
  });

/*
      var navpos = $('#mainnav').offset();
      console.log(navpos.top);
      $(window).bind('scroll', function () {
          if ($(window).scrollTop() > navpos.top) {
              $('#mainnav').addClass('navbar-fixed-top');
              $('#topnav').removeClass('navbar-fixed-top');
          } else {
              $('#topnav').addClass('navbar-fixed-top');
              $('#mainnav').removeClass('navbar-fixed-top');
          }
      });*/
 
});