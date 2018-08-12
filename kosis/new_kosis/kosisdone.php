<?php
							include"dbcon.php";
			$sql = "SELECT Introduction FROM kosis " ;
								mysql_select_db('test_db');
								$retval = mysql_query( $sql, $con );
   
								if(! $retval )
										{
											die('Could not get data: ' . mysql_error());
										}
   
								while($row = mysql_fetch_assoc($retval))
									{
										
										$Introduction= $row['Introduction'];
										echo "<p>"; echo $Introduction; echo"</p>";
									}
									?>