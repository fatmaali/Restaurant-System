<?php
session_start();
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';


	

$OrderObj = new SpecialOrder(NULL);
$OrderObj->setCustomerID($_SESSION['UserID']);
$OrderObj->setProviderID($_REQUEST['PID']);
$OrderObj->setOrderDescription($_REQUEST['Desc']);


$platForm=$_REQUEST['platform']; 



 $queryObj= new QueryBuilder;
 if(/*!empty($_REQUEST['PID'])&& */!empty($_REQUEST['Desc']))
 {
 	
 
  
   $queryObj->addSpecialOrder($OrderObj);
	
		 if($platForm=='android')
	      { 
	        $toJson= array(
                        'ProviderID' => $_REQUEST['PID'],
                        'CustomerID' => $_REQUEST['UserID'],
                        'Desc'  => $_REQUEST['Desc'],
                        'Add Special Order' => "successful"
                        );
		 $json = json_encode($toJson);
		 echo $json;
	      }
	   else{
	   
			 header("Location:..\View\profile.php");
		   }
	 }
	else if($platForm=='android')
	  {  $toJson= array('Add Special OrderdateItem' => "unsuccessful");
	    $json = json_encode($toJson);
		 echo $json;
	  }
	  else {  
	header("Location:..\View\profile.php");
		}





?>