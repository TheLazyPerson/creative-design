<? include "header.php" ?>

	<style>
		.navbar-default{
    background:transparent;
    border:none !important;
}
.navbar-nav>li>a:hover{
    color:#1a1a1a;
} 
.collapse.in{
    
    background-color:#f0f0f0 !important;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus
.spacer{
   background-color:#888;   
}

.spacer{
    height:100px;
}
	</style>
	 <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-top:200px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>



<div class="spacer"></div>

<p id="startchange">
    Roof party kale chips fixie viral DIY salvia seitan XOXO Banksy. Chia plaid meggings, DIY Thundercats salvia freegan jean shorts gentrify. Retro four loko meh, banjo bespoke ennui wolf before they sold out vegan keytar gastropub beard seitan fashion axe street art. Cosby sweater American Apparel gluten-free skateboard leggings plaid swag banh mi Williamsburg drinking vinegar, vinyl slow-carb brunch photo booth. Sartorial Etsy Truffaut, small batch banh mi letterpress tousled cardigan leggings 3 wolf moon ethical messenger bag PBR&B. Tofu Schlitz narwhal, banjo Bushwick forage trust fund next level bespoke. Gastropub scenester Truffaut locavore deep v, forage ugh Wes Anderson twee.
</p>



<? include "footer.php" ?>
 <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  <script src="./js/bootstrap.min.js"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script>
	$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-default").css('background-color', '#f0f0f0');
       } else {
          $('.navbar-default').css('background-color', 'red');
       }
   });
    }
});
</script>