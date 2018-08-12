<?php
include"dbcon.php";

$d=date("F d, Y");

session_start();
$name= $_POST['Name'];
$email=$_POST['Email'];
$Phone= $_POST['Phone'];
$comment= $_POST['Message'];
$sr_no=$_SESSION['sr_no'];  

		
				
				$query = "INSERT INTO  coments(Name,Email,Phone,Message,dat,news_id) values('$name','$email','$Phone','$comment','$d','$sr_no')";
				$data = mysql_query ($query)or die(mysql_error());
					if($data)
						{
							$_SESSION['newsrtv']=$sr_no;
							$_SESSION['popup']="1";
			                $_SESSION['textt']="COMMENT posted succesfully.<br> ";
							header("location: singlepage.php");
						}
			
    


?>