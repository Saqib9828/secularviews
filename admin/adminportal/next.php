<?php
	
$sql = "SELECT COUNT(sr_no)AS news_count FROM news WHERE category LIKE '%$news_cat%'";
								mysql_select_db('test_db');
								$retval = mysql_query( $sql, $con );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysql_error());
										}
   
								while($row = mysql_fetch_assoc($retval))
									{
										
										$news= $row['news_count'];
										
									}
								
								
if($news<=8)
{
	
}
else if($news>8 && $news<=16)
{
	print"<li><a href='categories.php?news_cat=".$news_cat."&low=0&high=9'>First</a></li>";
	print"<li><a href='categories.php?news_cat=".$news_cat."&low=9&high=17'>Last</a></li>";
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
	print"<li><a href='categories.php?news_cat=".$news_cat."&low=0&high=9'>First</a></li>";
	$H=8;
	for($i=1;$i<=$X;$i++)
	{
	$L=$H+1;
	$H=$L+ 7;
	print"<li><a href='categories.php?news_cat=".$news_cat."&low=".$L."&high=".$H."'>".$i."</a></li>";
	}
	print"<li><a href='categories.php?news_cat=".$news_cat."&low=".($H+1)."&high=".($H+8)."'>Last</a></li>";
}
?>