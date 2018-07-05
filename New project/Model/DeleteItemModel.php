<?php
session_start();

require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
$queryObj= new QueryBuilder;

$platForm=$_REQUEST['platform']; 
$ItemID= $queryObj->deleteItem($_REQUEST['ItemID']);
if($platForm=='android')
	      { 
	        $toJson= array(
                        'Delete Item' => "successful"
                        );
		 $json = json_encode($toJson);
		 echo $json;
	      }
else
{
 
	   
			 header("Location:..\View\profile.php");
		 
}





?>