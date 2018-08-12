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
			<div class="main-content">		
				<div class="col-md-9 total-news">
					<div class="slider">
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  $("#conference-slider").responsiveSlides({
								auto: true,
								manualControls: '#slider3-pager',
							  });
							});
						</script>
						 <div class="conference-slider">
							<!-- Slideshow 3 -->
							<ul class="conference-rslide" id="conference-slider">
							  <li><img src="images/c1u.jpg" alt=""></li>
							
							  <li><img src="images/c3u.jpg" alt=""></li>
							    <li><img src="images/C2u.jpg" alt=""></li>
							  <li><img src="images/c4u.jpg" alt=""></li>
							</ul>
							<!-- Slideshow 3 Pager -->
							<ul id="slider3-pager">
							  <li><a href="#"><img src="images/c1u.jpg" style="hieght:331px"alt=""></a></li>
							  
							  <li><a href="#"><img src="images/c3u.jpg" alt=""></a></li>
							  <li><a href="#"><img src="images/C2u.jpg" alt=""></a></li>
							  <li><a href="#"><img src="images/c4u.jpg" alt=""></a></li>
							</ul>
							<div class="breaking-news-title">
								<p>In the age of visionless and negative journalism, www.secularviews.com will highlight stories of hope and development. </p>
							</div>
						</div> 
						<h5 class="breaking"><a href="all.php?low=0&high=9">Latest news</a></h5>
					</div>	
				<div class="posts">
					<div class="left-posts">
						<div class="world-news">
							<div class="main-title-head">
								<h3>University News</h3>
								<a href="categories.php?news_cat=University_News&low=0&high=9">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
							<?php
							include"dbcon.php";
			$sql = "SELECT sr_no,LEFT(topic,200) AS topica,few_d,pic1 FROM news WHERE category LIKE '%University_News%' ORDER BY sr_no DESC LIMIT 3 " ;
								mysqli_select_db($con,'test_db');
								$retval = mysqli_query( $con ,$sql );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysqli_error($con));
										}
    
								while($row = mysqli_fetch_assoc($retval))
									{
										
										$sr_no= $row['sr_no'];
										$topic= $row['topica'];
										$few_d= $row['few_d'];
										$pic1= $row['pic1'];
										
								print"<div class=\"world-news-grid\">";
									echo'<img src="admin/'.$pic1.'" width="145px" height="130px" alt=""/>';
									print"<a href='singlepage.php?news_id=".$row['sr_no']."' class=\"title\">";echo $topic;echo " ..."; print"</a>";
									
									print"<a href='singlepage.php?news_id=".$row['sr_no']."'>Read More</a>";
								print"</div>";
									}
								?>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="latest-articles">
							<div class="main-title-head">
								<h3>Politics</h3>
								<a href="categories.php?news_cat=Politics&low=0&high=9">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<?php
							
			$sql = "SELECT sr_no,LEFT(topic,200) AS topica,few_d,pic1 FROM news WHERE category LIKE '%Politics%' AND (category NOT LIKE '%University_News%') ORDER BY sr_no DESC LIMIT 3 " ;
								mysqli_select_db($con,'test_db');
								$retval = mysqli_query( $con ,$sql );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysqli_error($con));
										}
    
								while($row = mysqli_fetch_assoc($retval))
									{
										
										$sr_no= $row['sr_no'];
										$topic= $row['topica'];
										$few_d= $row['few_d'];
										$pic1= $row['pic1'];
										
								print"<div class=\"world-news-grid\">";
									echo'<img src="admin/'.$pic1.'" width="145px" height="130px" alt=""/>';
									print"<a href='singlepage.php?news_id=".$row['sr_no']."' class=\"title\">";echo $topic;echo " ..."; print"</a>";
									
									print"<a href='singlepage.php?news_id=".$row['sr_no']."'>Read More</a>";
								print"</div>";
									}
								?>
							
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="latest-articles">
							<div class="main-title-head">
								<h3>Education    </h3>
								<a href="categories.php?news_cat=Education&low=0&high=9">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<?php
							
			$sql = "SELECT sr_no,LEFT(topic,200) AS topica,few_d,pic1 FROM news WHERE category LIKE '%Education%' AND (category NOT LIKE '%University_News%') AND (category NOT LIKE '%Politics%') ORDER BY sr_no DESC LIMIT 3 " ;
								mysqli_select_db($con,'test_db');
								$retval = mysqli_query( $con ,$sql );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysqli_error($con));
										}
    
								while($row = mysqli_fetch_assoc($retval))
									{
										
										$sr_no= $row['sr_no'];
										$topic= $row['topica'];
										$few_d= $row['few_d'];
										$pic1= $row['pic1'];
										
								print"<div class=\"world-news-grid\">";
									echo'<img src="admin/'.$pic1.'" width="145px" height="130px" alt=""/>';
									print"<a href='singlepage.php?news_id=".$row['sr_no']."' class=\"title\">";echo $topic; echo " ..."; print"</a>";
									
									print"<a href='singlepage.php?news_id=".$row['sr_no']."'>Read More</a>";
								print"</div>";
									}
								?>
								<div class="clearfix"></div>
							</div>
						</div>
						
						<div class="gallery">
							<div class="main-title-head">
								<h3>Entertainment</h3>
								<a href="categories.php?news_cat=Entertainment&low=0&high=9">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="gallery-images">
								<div class="course_demo1">
								  <ul id="flexiselDemo1">	
								  <?php
							
			$sql = "SELECT sr_no,topic,few_d,pic1 FROM news WHERE category LIKE '%Entertainment%' ORDER BY sr_no DESC LIMIT 3 " ;
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
										$few_d= $row['few_d'];
										$pic1= $row['pic1'];
								
									 print"<li>";
										print"<a href='singlepage.php?news_id=".$row['sr_no']."'>";echo'<img src="admin/'.$pic1.'" width="145px" height="130px" alt=""/>';print"</a>";						
									 print"</li>";
												}
								?>
								 </ul>
							 </div>
							 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>
						 </div>
						 <div class="course_demo1">
								  <ul id="flexiselDemo">	
									 <?php
							
			$sql = "SELECT sr_no,topic,few_d,pic1 FROM news WHERE category LIKE '%Entertainment%' ORDER BY sr_no DESC LIMIT 3,3 " ;
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
										$few_d= $row['few_d'];
										$pic1= $row['pic1'];
								
									 print"<li>";
										print"<a href='singlepage.php?news_id=".$row['sr_no']."'>";echo'<img src="admin/'.$pic1.'" width="145px" height="130px" alt=""/>';print"</a>";						
									 print"</li>";
												}
								?>
								 </ul>
							 </div>
							 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>

							</div>
						<div class="tech-news">
							<div class="main-title-head">
								<h3>Economy</h3>
								<a href="categories.php?news_cat=Economy&low=0&high=9">More  +</a>
								<div class="clearfix"></div>
							</div>	
							<div class="tech-news-grids">
								<div class="left-tech-news">
								<?php
							
			$sql = "SELECT sr_no,topic,LEFT(few_d,200) AS few_da,pic1 FROM news WHERE category LIKE '%Economy%' AND (category NOT LIKE '%University_News%') AND (category NOT LIKE '%Politics%') ORDER BY sr_no DESC LIMIT 3 " ;
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
										$few_d= $row['few_da'];
										$pic1= $row['pic1'];
								
									print"<div class=\"tech-news-grid span_66\">";
										print"<a href='singlepage.php?news_id=".$row['sr_no']."'>";echo $topic; print"</a>";
										print"<p>";echo $few_d;  echo " ..."; print"</p>";
										print"<p>";print"<a href='singlepage.php?news_id=".$row['sr_no']."'>";echo "Read More";print"</a>";  print"</p>";
									print"</div>";
									}
									?>
								</div>
								<div class="right-tech-news">
										<?php
							
			$sql = "SELECT sr_no,topic,LEFT(few_d,200) AS few_da,pic1 FROM news WHERE category LIKE '%Economy%' AND (category NOT LIKE '%University_News%') AND (category NOT LIKE '%Politics%') ORDER BY sr_no DESC LIMIT 3,3 " ;
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
										$few_d= $row['few_da'];
										$pic1= $row['pic1'];
								
									print"<div class=\"tech-news-grid span_66\">";
										print"<a href='singlepage.php?news_id=".$row['sr_no']."'>";echo $topic; print"</a>";
										print"<p>";echo $few_d; echo " ..."; print"</p>";
										print"<p>";print"<a href='singlepage.php?news_id=".$row['sr_no']."'>";echo "Read More";print"</a>";  print"</p>";
									print"</div>";
									}
									?>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="right-posts">
						<div class="desk-grid">
							<h3>Bussiness</h3>
							<?php
							
			$sql = "SELECT sr_no,topic,LEFT(few_d,200) AS few_da,pic1 FROM news WHERE category LIKE '%Bussiness%' ORDER BY sr_no DESC LIMIT 4 " ;
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
										$few_d= $row['few_da'];
										$pic1= $row['pic1'];
										
							print"<div class=\"desk\">";
								print"<a href='singlepage.php?news_id=".$row['sr_no']."' class=\"title\">";echo $topic; print"</a>";
								print"<p>";echo $few_d;echo " ..."; print"</p>";
								print"<p><a href='singlepage.php?news_id=".$row['sr_no']."'>Read More</a></p>";
							print"</div>";
									}
									?>
							
							<a class="more" href="categories.php?news_cat=Bussiness&low=0&high=9">More  +</a>
						</div>
						<div class="editorial">
							<h3>Sports</h3>
							<?php
			$sql = "SELECT sr_no,LEFT(topic,200) AS topica,few_d,pic1 FROM news WHERE category LIKE '%Sports%' ORDER BY sr_no DESC LIMIT 4 " ;
								mysqli_select_db($con,'test_db');
								$retval = mysqli_query( $con ,$sql );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysqli_error($con));
										}
    
								while($row = mysqli_fetch_assoc($retval))
									{
										
										$sr_no= $row['sr_no'];
										$topic= $row['topica'];
										$few_d= $row['few_d'];
										$pic1= $row['pic1'];
										
							print"<div class=\"editor\">";
								print"<a href='singlepage.php?news_id=".$row['sr_no']."'>";echo'<img src="admin/'.$pic1.'" width="145px" height="150px" alt=""/>';print"</a>";
								print"<a href='singlepage.php?news_id=".$row['sr_no']."'>";echo $topic; echo " ...";print"</a>";
							print"</div>";
									}
									?>
								<a class="more" href="categories.php?news_cat=Sports&low=0&high=9">More  +</a>
						</div>
					</div>
					<div class="clearfix"></div>	
				</div>
				</div>	
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
		
			$sql = "SELECT sr_no,topic FROM news ORDER BY sr_no DESC LIMIT 5" ;
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
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=December&low=0&high=8">December 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=November&low=0&high=8">November 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=October&low=0&high=8">October 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=September&low=0&high=8">September 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=August&low=0&high=8">August 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=July&low=0&high=8">July 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=June&low=0&high=8">June 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=May&low=0&high=8">May 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=April&low=0&high=8">April 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=March&low=0&high=8">March 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=February&low=0&high=8">February 2017</a></h6>
										<h6><a href="timenews.php?news_time_yr=2017&news_time_mn=January&low=0&high=8">January 2017</a></h6>
										
								</div>
							
								</div>
			
					
				</div>	
				<div class="clearfix"></div>
			</div>
		<?php include"footer.html"; ?>
		</div>
	</div>

	
</body>
</html>