<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<?php
		session_start();
		echo $_SESSION["eml"];
		echo "<br>";
		echo $_SESSION["psw"];
		$dis = "display: none;";
		if ($_SESSION["eml"] != "")
{
	$dis = "";
}
	?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Limelight website for high end mobiles,like samsung nokia mobile website templates for free | Blog :: w3layouts</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/fave-icon.png" />
	    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	   <script type="text/javascript">
			$(window).load(function(){
				$('div.description').each(function(){
					$(this).css('display', 'block');
				});
				
				$('div.content-top-grid').hover(function(){
					$(this).children('.description').stop().fadeTo(500, 1);
				},function(){
					$(this).children('.description').stop().fadeTo(500, 0);
				});
				
			});
	</script>
	<!---start-blog---->
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio1',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio1').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -2}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
	});	
	</script>
	<!---//start-blog---->
	</head>
	<body>
		<!---start-wrap---->
		<div class="wrap">
		<!---strat-header---->
		<div class="header"> 
			<div class="logo">
				<a href="index.php"> </a>
			</div>
			<div class="top-nav">
				<ul>
					<li><a href="index.php"> <span> </span></a></li>
					<li><a href="index.php">Home</a></li>
					<li  class="active"><a href="blog.php">Blog</a></li>
					<li><a href="profile.php" style="<?php echo $dis ?>">Profile</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="logout.php" style="<?php echo $dis ?>">Logout</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<!---//End-header---->
		<!---start-content---->
		<!---start-blog---->
		<div class="blog">
			<div class="wrap">
				<div class="blog-header">
					<h3>Blog</h3>
				</div>
			</div>
			<ul id="filters" class="clearfix">
				<div class="wrap"> 
						<li><span class="filter active" data-filter="app card icon logo web">All</span></li>
						<li><span class="filter" data-filter="icon">Mobile</span></li>
						<li><span class="filter" data-filter="web">Technology</span></li>
						<li><span class="filter" data-filter="web">Study</span></li>
						<li><span class="filter" data-filter="web">Other</span></li>
						<div class="clear"> </div>
				</div>
			</ul>
			<div class="wrap"> 
			<div class="blog-grids" id="portfoliolist">
				<div class="blog-articla-grid  portfolio1 logo1" data-cat="logo">
					<div class="blog-articla-grid-pic">
						<a href="bsingle.php"><img src="images/artpic2.png" alt=" "></a>
					</div>
					<div class="blog-articla-grid-info">
						<h3><a href="bsingle.php">Lorem ipsum dolor sit amet adipisicing elit?</a></h3>
						<ul>
							<li><p>post on <a href="bsingle.php">July 28,2013</a></p></li>
							<li><a href="bsingle.php"> James Reed</a></li>
							<li><a href="bsingle.php"> Technology</a></li>
							<p class="artical-para">
								consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<a class="artbtn" href="bsingle.php">Read More</a>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="blog-articla-grid  portfolio1 logo1" data-cat="app">
					<div class="blog-articla-grid-pic">
						<a href="bsingle.php"><img src="images/artpic1.png" alt=" "></a>
					</div>
					<div class="blog-articla-grid-info">
						<h3><a href="bsingle.php">Sed do eiusmod tempor incididunt ut labore et</a></h3>
						<ul>
							<li><p>post on <a href="bsingle.php">July 28,2013</a></p></li>
							<li><a href="bsingle.php"> James Reed</a></li>
							<li><a href="bsingle.php"> Technology</a></li>
							<p class="artical-para">
								consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<a class="artbtn" href="bsingle.php">Read More</a>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="blog-articla-grid  portfolio1 logo1" data-cat="app">
					<div class="blog-articla-grid-pic">
						<a href="bsingle.php"><img src="images/artpic3.png" alt=" "></a>
					</div>
					<div class="blog-articla-grid-info">
						<h3><a href="bsingle.php">Lorem ipsum dolor sit amet adipisicing elit?</a></h3>
						<ul>
							<li><p>post on <a href="bsingle.php">July 28,2013</a></p></li>
							<li><a href="bsingle.php"> James Reed</a></li>
							<li><a href="bsingle.php"> Technology</a></li>
							<p class="artical-para">
								consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<a class="artbtn" href="bsingle.php">Read More</a>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
				
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="icons-pagenate">
				<ul>
					<li><a class="frist-page" href="#"> </a></li>
					<li><a href="#">1 </a></li>
					<li><a href="#">2 </a></li>
					<li><a href="#">3 </a></li>
					<li><a href="#">4 </a></li>
					<li><a class="last-page" href="#"> </a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<!---//End-blog---->
		<div class="bottom-grids">
			<div class="wrap"> 
			<div class="bottom-grid-left">
				<h3>Visit Our Shop</h3>
				<div class="bottom-grid-left-grid">
					<div class="bottom-grid-left-grid-left">
						<a href="#"><img src="images/bottom-pic.png" alt="" /></a>
					</div>
					<div class="bottom-grid-left-grid-right">
						<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam et dolore magna aliqua.</p>
						<a class="letbtn" href="#">Lets shop</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="bottom-grid-right">
				<h3>Latest tweets</h3>
				<div class="bottom-grid-right-grid">
					<div class="bottom-grid-right-grid-left">
						
					</div>
					<div class="bottom-grid-right-grid-right">
						<p><span>Eiusmod:</span>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<span><a href="#">#incididunt</a></span>
						<label><a href="#">8 mins ago</a></label>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<div class="bottom-grid-right-grid">
					<div class="bottom-grid-right-grid-left">
						
					</div>
					<div class="bottom-grid-right-grid-right">
						<p><span>Eiusmod:</span>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<span><a href="#">#incididunt</a></span>
						<label><a href="#">2 days ago</a></label>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<!---//End-content---->
		<!---start-footer---->
		<div class="footer"> 
			<div class="wrap"> 
				<div class="footer-left">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="blog.php">Archive</a></li>
						<li><a href="contact.php">Contact</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-center">
					<ul>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span> </span></a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-right">
					<p>Copyright &#169; 2013 Designer First. All Rights Reserved. Template By  <a href="http://w3layouts.com/">W3Layouts</a></p>
				</div>
				<div class="clear"> </div>
				</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
		 </div>
	</body>
</html>

