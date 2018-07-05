<?php
require "TableReservation.php";
echo '1';
$MyObj=new reservation($_REQUEST["ID"]);	
$MyObj->Email=$_REQUEST["Email"];
function isinresevation(){
	
$search=0;
$query = "SELECT * FROM reservation";
$result = mysql_query($query);echo 'database run';
$i=0;
$row[0] = "";
while($Added = mysql_fetch_array($result))
{
	if($Added['Email']==$_REQUEST["Email"])
{
	$row[$i] = $Added['Email'];
	$id[$i] = $Added['ID'];
	$i++;
	$search=$search+1;
echo 'Search Done!!';
echo $search;
}

			//return $search;


}
	}
?>