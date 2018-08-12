<?php
include"dbcon.php";

$d=date("F d, Y");

session_start();
$name= $_POST['Name'];
$name=mysql_real_escape_string($name);
$email=$_POST['Email'];
$email=mysql_real_escape_string($email);
$Phone= $_POST['Phone'];
$Phone=mysql_real_escape_string($Phone);
$comment= $_POST['Message'];
$comment=mysql_real_escape_string($comment);
$sr_no=$_SESSION['sr_no'];  
$sr_no=mysql_real_escape_string($sr_no);

		
				
				$query = "INSERT INTO  u440823744_sec.coments(Name,Email,Phone,Message,dat,news_id) values('$name','$email','$Phone','$comment','$d','$sr_no')";
				mysqli_select_db($con,'test_db');				
				$data = mysqli_query( $con ,$query );
					if($data)
						{
							$_SESSION['newsrtv']=$sr_no;
							$_SESSION['popup']="1";
			                $_SESSION['textt']="COMMENT posted succesfully.<br> ";
							header("location: singlepage.php");
						}
			
    


?>