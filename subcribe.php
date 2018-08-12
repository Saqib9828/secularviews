<?php
include"dbcon.php";
session_start();


$topic= $_POST['email'];
$topic=mysql_real_escape_string($topic);

		
				
				$query = "INSERT INTO  u440823744_sec.subcriber(email) values('$topic')";
				mysqli_select_db($con,'test_db');				
				$data = mysqli_query( $con ,$query );
					if($data)
						{
							$_SESSION['popup']="1";
							$_SESSION['textt']="Your NEWS posted succesfully.<br> ";
							header("location: index.php");
						}
			
    


?>