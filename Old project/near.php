<?php
include "connect.php";
 function nearest($date1,$option)
{
$sql = "SELECT `Date`  FROM `reservation` WHERE Date >= CURDATE() ORDER BY Date ASC";
$query="SELECT CURRENT_DATE()";
$result = mysql_query($query);
$person = mysql_fetch_array($result);
$orderdate1 = explode('-', $person[0]);
$cyear = $orderdate1[0];
$cmonth   = $orderdate1[1];
$cday  = $orderdate1[2];

$search =0;


$date = explode('-', $date1);
$year = $date[0];
$month= $date[1];
$day  = $date[2];
if($year >= $cyear)
{
	if($month >= $cmonth || $year >= $cyear )
	{
		if($day >= $cday || $month >= $cmonth || $year >= $cyear)
		{
			$result1 = mysql_query($sql);
			$i=0;
			$record =$date1;
			$search =0;
			while($person1 = mysql_fetch_array($result1))
				{
					//echo $person1[0];
					$array[$i] = $person1[0];
					
					
					//echo $array[$i];
					if($record == $array[$i])
					{
						$search++;					
						$orderdate = explode('-', $person1[0]);
						$year1 = $orderdate[0];
						$month1   = $orderdate[1];
						$day1  = $orderdate[2];
							$day1=$day1+$option;
						if ($day1 > 30)
						{
								$day1=$day1%30;
						
							$month1=$month+1;
						}
					
						
						
						$record ="$year1-$month1-$day1";
					
						
						 
					}
					//echo $array[$i] ."<br>";
					
					$i++;

				}
				echo $record;
				//echo $search;
		}
	}
}	
return $record;
	}
	echo nearest("2016-5-20" , 7);
?>