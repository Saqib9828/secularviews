<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

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
<!DOCTYPE html>
<html>
<head>




<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php $topic; ?>" />

<meta property="og:image"              content="admin/<?php echo $pic1;?>" />



<title><?php $topic; ?></title>
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
			<!-- header-section-starts -->
	
			<div class="header">
			
					<div class="social-icons">
						<li><a href="https://plus.google.com/u/0/113953865672710844209"><img src="images/g.png" alt=""></a></li>
						<li><a href="https://www.facebook.com/secularviews"><img src="images/f.png" alt=""></a></li>
						<li><a href="https://www.linkedin.com/in/secular-views-3b7227113?trk=nav_responsive_tab_profile_pic"><img src="images/ln.png" alt=""></a></li>
						<li><div class="facebook"><div id="fb-root"></div>
							
							<div id="fb-root"></div>
							</div></li>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
	   						
	   						<div class="fb-like" data-href="https://www.facebook.com/secularviews" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
							

					</div>
					<div class="clearfix"></div>
				<div class="header-right">
					<div class="top-menu">
						<ul>  
						
							<li><a href="index.php"><img src="p_img/logo.png" alt="..." class="img-logo" style="height:160px; width:160px;"></a></li> | 
							<li><a href="index.php">Home</a></li> |  
						<li><a  href="aboutus.php">About Us</a></li> | 
					
						<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					
					
					<div id="small-dialog2" class="mfp-hide">
						<div class="signup">
							
							
							
							
							<div class="clearfix"></div>
							
						</div>
					</div>	

                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>							
							<li><a href="contactus.php">Contact Us</a></li>  
						
							
	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form>
					<label>Email / Username</label>
					<input type="text" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form>
					<label>Full Name</label>
					<input type="text" />
					<br />

					<label>Email Address</label>
					<input type="email" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="send_updates" type="checkbox" />
						<label for="send_updates">Send me occasional email updates</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script></li> |   
							<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Subscribe</a></li>
						</ul>
					</div>
					<!---pop-up-box---->  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					<div id="small-dialog1" class="mfp-hide">
						<div class="signup">
							<h3>Subscribe</h3>
							<h4>Enter Your Valid E-mail</h4>
							<form role="form" action="subcribe.php" method="post" class="login-form" enctype="multipart/form-data">
							<input type="text" name="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
							
							<div class="clearfix"></div>
							<input type="submit"  value="Subscribe Now"/>
							</form>
						</div>
					</div>	
				
                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
					</br></br></br><div class="search">
						<form>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
			<span class="menu"></span>
			<div class="menu-strip">
				<ul>           
					<li><a href="index.php">Home</a></li>
					<li><a href="categories.php?news_cat=University_News&low=0&high=9">University&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
					<li><a href="categories.php?news_cat=Politics&low=0&high=9">Politics</a></li>
					<li><a href="categories.php?news_cat=Bussiness&low=0&high=9">Bussiness</a></li>
					<li><a href="categories.php?news_cat=Economy&low=0&high=9">Economy</a></li>
					<li><a href="categories.php?news_cat=Sports&low=0&high=9">Sports</a></li>
					<li><a href="categories.php?news_cat=Entertainment&low=0&high=9">Entertainment</a></li>
					<li><a href="categories.php?news_cat=Education&low=0&high=9">Education</a></li>
					<li><a href="categories.php?news_cat=Medical&low=0&high=9">Medical</a></li>
					
				</ul>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>
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
				<li><a href="#"><img src="images/likes.png" title="likes" /></a></li>
				<li><a href="#"><img src="images/link.png" title="link" /></a></li>
			
			<!--facebook -->

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

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>


			
			</ul>
			</div>
		</div>
	
			<div class="clearfix"> </div>
	</div>
	<?php
						$news_id = $_SESSION['sr_no'];
						$sql = "SELECT LEFT(Name, 1) as alpha,Name,Message,dat FROM u440823744_sec.coments WHERE news_id='$news_id' ORDER BY c_id ASC" ;
								mysqli_select_db($con,'test_db');
								$retval = mysqli_query( $con ,$sql );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysqli_error($con));
										}
    
								while($row = mysqli_fetch_assoc($retval))
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