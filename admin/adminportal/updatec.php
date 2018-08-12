<?php

include"dbcon.php";
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



session_start();
$id=$_SESSION['edit']; 									

$topic= $_POST['topic'];
$few_d= $_POST['few_d'];
$content= $_POST['content'];

$query2 = "UPDATE news SET topic='".$topic."' WHERE sr_no=$id";
$query1 = "UPDATE news SET few_d='".$few_d."' WHERE sr_no=$id";
$query3 = "UPDATE news SET content='".$content."' WHERE sr_no=$id";

$data = ( mysql_query ($query2) and mysql_query ($query1) and mysql_query ($query3) ) or die(mysql_error());
	if($data)
		{
			$_SESSION['popup']="1";
			$_SESSION['textt']="NEWS updated succesfully.<br> ";
			header("location:../adminpanel.php");
			
		}
	
?>