<?php
	
$sql = "SELECT COUNT(sr_no)AS news_count FROM u440823744_sec.news WHERE dat LIKE '%$news_time_mn%$news_time_yr%'";
								mysqli_select_db($con,'test_db');
								$retval = mysqli_query( $con ,$sql );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysqli_error($con));
										}
    
								while($row = mysqli_fetch_assoc($retval))
									{
										
										$news= $row['news_count'];
										
									}
									
								
if($news<=8)
{
	
}
else if($news>8 && $news<=16)
{
	print"<li><a href='timenews.php?news_time_yr=".$news_time_yr."&news_time_mn=".$news_time_mn."&low=0&high=9'>First</a></li>";
	print"<li><a href='timenews.php?news_time_yr=".$news_time_yr."&news_time_mn=".$news_time_mn."&low=9&high=17'>Last</a></li>";
}
else
{
	$A=intval($news/8);
	$B=$news%8;
	if($B==0)
	{
		$X=$A-2;
	}
	else
	{
		$X=$A-1;
	}
	print"<li><a href='timenews.php?news_time_yr=".$news_time_yr."&news_time_mn=".$news_time_mn."&low=0&high=9'>First</a></li>";
	$H=8;
	for($i=1;$i<=$X;$i++)
	{
	$L=$H+1;
	$H=$L+ 7;
	print"<li><a href='timenews.php?news_time_yr=".$news_time_yr."&news_time_mn=".$news_time_mn."&low=".$L."&high=".$H."'>".$i."</a></li>";
	}
	print"<li><a href='timenews.php?news_time_yr=".$news_time_yr."&news_time_mn=".$news_time_mn."&low=".($H+1)."&high=".($H+8)."'>Last</a></li>";
}
?>