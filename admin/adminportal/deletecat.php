<?php

include"dbcon.php";
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



session_start();
										
$S_No=$_GET['delete'];
$querydeletecmnt = "DELETE FROM coments WHERE news_id=$S_No";
$querydeleteblog = "DELETE FROM news WHERE sr_no=$S_No";
$queryselectpic = "SELECT pic1 FROM news WHERE sr_no=$S_No" ;
								mysql_select_db('test_db');
								$retval = mysql_query( $queryselectpic, $con );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysql_error());
										}
   
								while($row = mysql_fetch_assoc($retval))
									{
										
										$file= $row['pic1'];
									}
$file = "../".$file;
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }

$data = mysql_query ($querydeletecmnt)and mysql_query ($querydeleteblog)or die(mysql_error());
	if($data)
		{
			$_SESSION['popup']="1";
			$_SESSION['textt']="Your News and COMMENTS deleted succesfully.<br> ";
			header("location:../adminpanel.php");
			
		}
		



?>