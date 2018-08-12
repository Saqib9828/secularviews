<?php
include"../dbcon.php";
session_start();


$d= date("dY");
$new_name=$d.uniqid();

$target_dir1 = "uploads1/";
$target_file1 = $target_dir1 .$new_name. basename($_FILES["fileToUpload1"]["name"]);


$uploadOk = 1;



$topic= $_POST['topic'];
$topic=mysql_real_escape_string($topic);
$few_d=$_POST['few_d'];
$few_d=mysql_real_escape_string($few_d);
$dat= date("F d, Y");
$content= $_POST['content'];
$content=mysql_real_escape_string($content);
$checkbox1=$_POST['category'];  
$chk="";

 
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
 
 
 
 
 
 
 
 $acceptedFormats = array('gif', 'png', 'jpg','GIF', 'PNG', 'JPG', 'JPEG', 'jpeg');

if(!in_array(pathinfo($target_file1, PATHINFO_EXTENSION), $acceptedFormats)) {
   
$uploadOk = 0;
}
 
 
 
 
 
	if($uploadOk == 1)
	{
		
				 if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) 
					{
						echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";
					} 
					else 
					{
						echo "Sorry, there was an error uploading your file1.";
					}
				
				$query = "INSERT INTO  news(topic,few_d,dat,category,content,pic1) values('$topic','$few_d','$dat','$chk','$content','$target_file1')";
				$data = mysql_query ($query)or die(mysql_error());
					if($data)
						{
							$_SESSION['popup']="1";
							$_SESSION['textt']="Your NEWS posted succesfully.<br> ";
							header("location: adminpanel.php");
						}
	}
else
		{
			header("location: logout.php");
		}
    


?>