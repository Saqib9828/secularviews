<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Blog</strong> post form</h1>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Fill the form and Submit.</h3>

                        		</div>
                        		
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="adminportal/updatec.php" method="post" class="login-form" enctype="multipart/form-data">
								<?php
									
								include"dbcon.php";
								$S_No=$_GET['edit'];
								 $sql = "SELECT sr_no,topic,few_d,content FROM news WHERE sr_no='$S_No'" ;
								mysql_select_db('test_db');
								$retval = mysql_query( $sql, $con );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysql_error());
										}
   
								while($row = mysql_fetch_assoc($retval))
									{
										
										$topic= $row['topic'];
										$few_d= $row['few_d'];
										$content= $row['content'];
										
										
										$_SESSION['topic']=$topic;
										$_SESSION['few_d']=$few_d;
										$_SESSION['content']=$content;
										$_SESSION['edit']=$S_No;
										
									}
								?>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="topic" placeholder="topic..." class="form-username form-control" id="form-username" value="<?php echo $_SESSION['topic'];?>">
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="few_d" placeholder="few desciption..." class="form-username form-control" id="form-username" value="<?php echo $_SESSION['few_d'];?>">
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <textarea type="text" name="content" placeholder="content..." class="form-username form-control" id="form-username" ><?php echo $_SESSION['content'];?></textarea> 
                                    </div>
                                     <div class="form-group">
									
									 </div>
                                    <div class="col-md-6">
                                
                                    </div>
                                  
                                
			                        <button type="submit" class="btn">Post</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>