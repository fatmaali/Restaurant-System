<?php
function searchID($ID)
{      
$arrayofarray;
			$search=0;
   $query ="SELECT * FROM `party reservation`";
   $result = mysql_query($query);
//echo $result;
	$i=0;
    $row[0] = "";
    $z=0;
    $e=0;
    if($result === FALSE) { 
  trigger_error('Query failed returning error: '. mysql_error(),E_USER_ERROR);
}
while($person = mysql_fetch_array($result))
{
	if(intval($person['UserID'])==$ID)
	{
		$row[$i] = $person['UserID'];
		//echo $row[$i];
		$search=$search+1;
		$arrayofarray[$z][$e]=array($person);
		//echo $row[$i];
		$z++;
		$e++;
	//print_r($arrayofarray);
		continue;
		
		//return $row;
		
	}}
	
return($arrayofarray);
}
?>