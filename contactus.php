<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$_SESSION['newsrtv']="";
?>
<!DOCTYPE html>
<html>
<head>
<title>Secular Views : voice of secular india</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="secular,politics,news,news portal,knowledge,india,indian,khabar,aligarh,university,amu,aligarh muslim university" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

</head>
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<?php include"header.php"; ?>
			<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="blog-main-content">		
				<div class="col-md-9 total-news">
				
					<!----start-content----->
<div class="content">
	<div class="grids">
		<?php include"dbcon.php"; ?>
		
		<h3><big><b>Contact Us</b></big></h3></br></br></br></br>
							
							<div class="col-md-4 address">
							<address>
								<h5>Address:</h5>
								<p>Secular View Office,</p>
								<p>4/1095-A , Sir Syed Nagar , Opp. Sameer Apartment ,</p>
								<p>Near Nadeem Tareen Hall , Civil Lines , Aligarh ,</p>
								<p class="bottom">UP, 202002.</p><br>
								<h5>Phone:</h5>
								<p>+91-9997665436</p>
								<p>+91-9760144400</p>
								<p>+91-8533895109</p>
								<br>
								<h5>whatsapp:</h5>
								<p>+91-9568833003</p>
								<br>
								<h5>E-mail:</h5>
								<p>editorsecularviews@gmail.com</p>
								<p></p>
								
							</address>
						</div>
			<div class="clearfix"> </div>
	</div>
			<div class="clearfix"> </div>
		<div class="content-pagenation">
						
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					
			</div>
				</div>	
			<?php include"side.php"; ?>
				<div class="clearfix"></div>
			</div>
		<?php include"footer.html"; ?>
		</div>
	</div>
</body>
</html>