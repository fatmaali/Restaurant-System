<?php
function getlatid()
	{
		$sql="select * from menu order by ID";
		//mysql_query($sql);
		$StudentDataSet = mysql_query($sql) or die(mysql_error());
		
		$i=0;
		while ($row = mysql_fetch_array($StudentDataSet))
		{
			$i++;
		}return $i;
		}
		?>