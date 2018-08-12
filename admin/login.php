<?php
session_start();

include"dbcon.php";

$adminid=$_POST['username'];
$password=$_POST['password'];


$sql = "SELECT * FROM admin WHERE adminid='$adminid' AND pass='$password'";
mysql_select_db('test_db');
$retval = mysql_query( $sql, $con );
$rows=mysql_num_rows($retval);
if ($rows==1)
{
	$_SESSION['login']="1";
	$_SESSION['popup']="1";
	$_SESSION['textt']="Welcome Admin!<br> You have login successfully.";
	header("location: adminpanel.php");
	
}
else
{
	$_SESSION['popup']="1";
	$_SESSION['textt']="Sorry!<br> Wrong password or username.";
	header("location: admin_login.php");
}




?>