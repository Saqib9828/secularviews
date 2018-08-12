<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php 

            if($_SESSION['newsrtv']=="")
			{
				$news_id=$_GET['news_id'];
			}
			else
			{
				$news_id=$_SESSION['newsrtv'];
			}
			include"dbcon.php";
			
			 $sql = "SELECT sr_no,topic,few_d,content,dat,pic1 FROM u440823744_sec.news WHERE sr_no=$news_id" ;
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
										$content= $row['content'];
										$dat= $row['dat'];
										
										$_SESSION['sr_no']=$sr_no;
										$_SESSION['topic']=$topic;
										$_SESSION['few_d']=$few_d;
										$_SESSION['pic1']=$pic1;
										$_SESSION['content']=$content;
										$_SESSION['dat']=$dat;
										
										
									}
			?>
<head>
<title>Secular Views : voice of secular india</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<!-- Custom Theme files -->
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php $topic; ?>" />

<meta property="og:image"              content="admin/<?php echo $pic1;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="secular,politics,news,news portal,knowledge,india,indian,khabar,aligarh,university,amu,aligarh muslim university" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '222370258109529',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</head>

			
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<?php include"header.php"; ?>
			<div class="clearfix"></div>
			<div class="blog-main-content">		
				<div class="col-md-9 total-news">
					
	<div class="grids">
		<div class="grid box">
			<div class="grid-header">
				<a class="gotosingle" href="#"><?php echo $topic; ?> </a>
				<ul>
				<li><span>Post by<a href="#"> Admin</a> on <?php echo $dat;?> </span></li>
				<li><a href="#"></a></li>
				</ul>
			</div>
			<div class="singlepage">
							<a href="#"><img src="admin/<?php echo $pic1;?>" width="600px" height="380px"/></a>
							<p><strong><big><?php echo $few_d; ?></big></strong></p>
							<p><?php echo $content; ?></p>
							<div class="clearfix"> </div>
						</div>
			<div class="comments">
			<ul>
				<li><a href="#"><img src="images/views.png" title="view" /></a></li>
			</ul>
			<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
			</div>
		</div>
	
			<div class="clearfix"> </div>
	</div>
	<?php
						$news_id = $_SESSION['sr_no'];
						$sql = "SELECT LEFT(Name, 1) as alpha,Name,Message,dat FROM coments WHERE news_id='$news_id' ORDER BY c_id ASC" ;
								mysql_select_db('test_db');
								$retval = mysql_query( $sql, $con );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysql_error());
										}
   
								while($row = mysql_fetch_assoc($retval))
									{
										
										$Name= $row['Name'];
										$Message= $row['Message'];
										$dat= $row['dat'];
										$alpha= $row['alpha'];
										$alpha = ucfirst($alpha);
									include"alpha.php";
			
			  print"<ul class=\"comment-list\">";
		  		   print"<h5 class=\"post-author_head\">";echo $Name; print"</h5>";
		  		   echo'<img src="'.$img.' "alt=""/>';
		  		   print"<div class=\"desc\">";
		  		   print"<p>"; echo $Message; print"</p></br>";
				   print"<p>"; echo $dat; print"</p>";
		  		   print"</div>";
		  		   print"<div class=\"clearfix\"></div>";
		  		   print"</li>";
				 print" </ul>";
									}
									?>
			
				 <div class="content-form">
					 <h3>Leave a comment</h3>
					<form action="coments.php" method="post">
						<input name="Name" type="text" placeholder="Name" required/>
						<input name="Email" type="text" placeholder="Email" required/>
						<input name="Phone" type="text" placeholder="Phone" required/>
						<textarea  name="Message" placeholder="Message" required></textarea>
						<input type="submit" value="SEND"/>
				   </form>
						 </div>
			</div>	
				
				<?php include"side.php"; ?>
				<div class="clearfix"></div>
			</div>
	<?php include"footer.html"; ?>
		</div>
	</div>
	<!--script for popup-->	
			<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
	<?php
	$popup=$_SESSION['popup'];
	
	if($popup=="1"){
echo"<script type=\"text/javascript\">
    $(document).ready(function(){
        $('#myModaldesign').modal('show');
    });
	
	
</script>";}
    ?>
<?php include"popup.php";
			$_SESSION['popup']="0";
			$_SESSION['textt']=" ";
		?>
</body>
</html>