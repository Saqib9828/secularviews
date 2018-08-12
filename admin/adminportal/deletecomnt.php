<?php

include"../dbcon.php";
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



session_start();
									
$S_No=$_GET['delete'];
$querydeletecmnt = "DELETE FROM coments WHERE news_id=$S_No";
$data = mysql_query ($querydeletecmnt) or die(mysql_error());
	if($data)
		{
			$_SESSION['newsrtv']=$S_No;
			$_SESSION['popup']="1";
			$_SESSION['textt']="COMMENT deleted succesfully.<br> ";
			header("location:singlepage.php");
			
		}
		



?>