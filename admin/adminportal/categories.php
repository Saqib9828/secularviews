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
		<?php
		$news_cat=$_GET['news_cat'];
		$low=$_GET['low'];
		$high=$_GET['high'];
							include"dbcon.php";
			$sql = "SELECT sr_no,topic,LEFT(few_d,500) AS few_da,content,dat,pic1 FROM news WHERE category LIKE '%$news_cat%' ORDER BY sr_no DESC LIMIT $low,$high " ;
								mysql_select_db('test_db');
								$retval = mysql_query( $sql, $con );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysql_error());
										}
   
								while($row = mysql_fetch_assoc($retval))
									{
										
										$sr_no= $row['sr_no'];
										$topic= $row['topic'];
										$few_d= $row['few_da'];
										$pic1= $row['pic1'];
										$content= $row['content'];
										$dat= $row['dat'];
									
		print"<div class=\"grid box\">";
			print"<div class=\"grid-header\">";
				print"<a class=\"gotosingle\" href=\"#\">";echo $topic; print"</a>";
				print"<ul>";
				print"<li><span>Post by <a href=\"#\"> Admin</a> on "; echo $dat; print"<a href='deletecat.php?delete=" . $sr_no . "'> Delete </a>"; print"<a href='../updatep.php?edit=" . $sr_no . "'> Edit </a>"; print"</span></li>";
				
				print"</ul>";
			print"</div>";
			print"<div class=\"grid-img-content\">";
				print"<a href=\"singlepage.html\">";echo '<img src="../'.$pic1.'" class="blog" alt="" width="350px" height="230px" />'; print"</a>";
				print"<p>";echo $few_d;echo " ...";print"</p>";
				print"<div class=\"clearfix\"> </div>";
			print"</div>";
			print"<div class=\"comments\">";
			print"<ul>";
				print"<li><a href=\"#\"><img src=\"images/views.png\" title=\"view\" /></a></li>";
				print"<li><a href=\"#\"><img src=\"images/likes.png\" title=\"likes\" /></a></li>";
				print"<li><a href=\"#\"><img src=\"images/link.png\" title=\"link\" /></a></li>";
				print"<li><a class=\"readmore\" href='singlepage.php?news_id=".$row['sr_no']."'>ReadMore</a></li>";
				
			print"</ul>";
			print"</div>";
		print"</div>";
									}
									?>
			<div class="clearfix"> </div>
	</div>
			<div class="clearfix"> </div>
		<div class="content-pagenation">
						<?php include"next.php"; ?>
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