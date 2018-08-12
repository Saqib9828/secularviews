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
		
		<h3><big><b>About Us</b></big></h3></br></br></br></br>
							<h4>Why www.secularviews.com?</h4></br></br>
							<p>Media today is driven by political or corporate interests. Whether social problems or political 

and economic issues, Media ignores larger interests of the society, nation and the humanity. It 

becomes representatives of political parties or corporate world. Consequently, balanced and 

objective viewpoints on serious issues of common people are generally absent from media 

discourses.</br></br>

Media has become a cash and entertainment machine today. ‘Journalism for a cause’ is now an 

‘outdated’ idea. There is a mad race to amuse the viewers and sensationalize insignificant issues 

to increase TRP ratings for more and more revenues. The genuine and serious issues of the 

common people are not debated honestly and objectively. The today will leave impacts on 

the tomorrow. Yet, the future of India is not even at the margin of media debates. Here 

comes <b>www.secularviews.com</b>
</br></br>
As Not-For-Profit initiative, <b>www.secularviews.com</b> will not promote or safeguard any 

political or corporate interests. The larger interests of the humanity will form its core. It will 

boldly raise every issue that concerns the society without any bias or preconceived 

notions. <b>www.secularviews.com</b> will be a forum for serious and healthy debates on social, 

political and economic issues.
</br></br>
In the age of visionless and negative journalism, <b>www.secularviews.com</b> will highlight 

stories of hope and development. It will promote journalism of vision and <b>OPTIMISM</b>.</br></br>

</p>
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