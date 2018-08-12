<?php
$h=$_POST['area2'];
echo $h;

echo "<br>";


 session_start(); 
include"dbcon.php";


$Introduction= $_POST['area2'];

  
		
				
				$query = "INSERT INTO  kosis(Introduction) values('$Introduction')";
				$data = mysql_query ($query)or die(mysql_error());
					if($data)
						{
							
							echo "successful!";
						}
			
    




?>