<? include "header.php" ?>

<style>
	
	#thumbwrap {
	margin:75px auto;
	width:252px; height:252px;
}
.thumb {
	float:left; /* must be floated for same cross browser position of larger image */
	position:relative;
	margin:3px;
}
.thumb img { 
	border:1px solid #000;
	vertical-align:bottom;
}
.thumb:hover {
	border:0; /* IE6 needs this to show large image */
	z-index:1;
}
.thumb span { 
	position:absolute;
	visibility:hidden;
}
.thumb:hover span { 
	visibility:visible;
	top:37px; left:37px; 
}

</style>

<div id="thumbwrap">
<a class="thumb" href="#"><img src="images/jamie1.jpg" alt=""><span><img src="images/jamie1big.jpg" alt=""></span></a>
<a class="thumb" href="#"><img src="images/jamie2.jpg" alt=""><span><img src="images/jamie2big.jpg" alt=""></span></a>
<a class="thumb" href="#"><img src="images/jamie1.jpg" alt=""><span><img src="images/jamie1big.jpg" alt=""></span></a>
<a class="thumb" href="#"><img src="images/jamie2.jpg" alt=""><span><img src="images/jamie2big.jpg" alt=""></span></a>
<a class="thumb" href="#"><img src="images/jamie1.jpg" alt=""><span><img src="images/jamie1big.jpg" alt=""></span></a>
<a class="thumb" href="#"><img src="images/jamie2.jpg" alt=""><span><img src="images/jamie2big.jpg" alt=""></span></a>
<a class="thumb" href="#"><img src="images/jamie1.jpg" alt=""><span><img src="images/jamie1big.jpg" alt=""></span></a>
<a class="thumb" href="#"><img src="images/jamie2.jpg" alt=""><span><img src="images/jamie2big.jpg" alt=""></span></a>
<a class="thumb" href="#"><img src="images/jamie1.jpg" alt=""><span><img src="images/jamie1big.jpg" alt=""></span></a>
</div>


<? include "footer.php" ?>