<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

				<div class="col-md-3 side-bar">
				
					<div class="l_g_r">
										<div class="categories">
										<h4>Other Categories</h4>
										<h6><a href="all.php?low=0&high=9">All</a></h6>
										<h6><a href="categories.php?news_cat=Achievements&low=0&high=9">Achievements</a></h6>
										<h6><a href="categories.php?news_cat=culture&low=0&high=9">Art & culture</a></h6>
										<h6><a href="categories.php?news_cat=Fashion&low=0&high=9">Fashion & Beauty</a></h6>
										<h6><a href="categories.php?news_cat=History&low=0&high=9">History</a></h6>
										<h6><a href="categories.php?news_cat=Literary&low=0&high=9">Literary</a></h6>
										<h6><a href="categories.php?news_cat=Social&low=0&high=9">Social</a></h6>
										<h6><a href="categories.php?news_cat=Technology&low=0&high=9">Technology</a></h6>
										
								</div>		
									<div class="posts">
										<h4>Recent News</h4>
										<?php
		
			$sql = "SELECT sr_no,topic FROM u440823744_sec.news ORDER BY sr_no DESC LIMIT 5" ;
								mysqli_select_db($con,'test_db');
								$retval = mysqli_query( $con ,$sql );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysqli_error($con));
										}
    
								while($row = mysqli_fetch_assoc($retval))
									{
										
										$sr_no= $row['sr_no'];
										$topic= $row['topic'];
										
										print"<div class=\"desk\">";
										echo "<h6><a href='singlepage.php?news_id=".$row['sr_no']."'>";echo $topic;echo "</a></h6>";
										print"</div>";
									}
									?>
									</div>
									<div class="recent-comments">
										
									</div>
									<div class="archievs">
										<h4>Archives</h4>
										<h6><a href="timenews.php?news_time_yr=2016&news_time_mn=February&low=0&high=8">February 2016</a></h6>
										<h6><a href="timenews.php?news_time_yr=2016&news_time_mn=January&low=0&high=8">January 2016</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=December&low=0&high=8">December 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=November&low=0&high=8">November 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=October&low=0&high=8">October 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=September&low=0&high=8">September 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=August&low=0&high=8">August 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=July&low=0&high=8">July 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=June&low=0&high=8">June 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=May&low=0&high=8">May 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=April&low=0&high=8">April 2015</a></h6>
										<h6><a href="timenews.php?news_time_yr=2015&news_time_mn=March&low=0&high=8">March 2015</a></h6>
										
								</div>
				</div></div>
				<div class="clearfix"></div>
			
</body>
</html>