<?php
session_start();
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';


$platForm=$_REQUEST['platform']; 
if(!empty($_REQUEST['ItemID']))
{
	

$ItemObj = new Item($_REQUEST['ItemID']);
$ItemObj->setMealName($_REQUEST['name']);
$ItemObj->setMealPrice($_REQUEST['price']);
$ItemObj->setItemDescription($_REQUEST['Desc']);
$ItemObj->setItemCategory($_REQUEST['category']);

}


 $queryObj= new QueryBuilder;
 if(!empty($_REQUEST['name'])&& !empty($_REQUEST['price'])&& !empty($_REQUEST['Desc'])&& !empty($_REQUEST['category']))
 {
 	
 
  
   $queryObj->updateItem($ItemObj);
	
		 if($platForm=='android')
	      { 
	        $toJson= array(
	                     
                        'name' => $_REQUEST['name'],
                        'price' => $_REQUEST['price'],
                        'Description'  => $_REQUEST['Desc'],
                        'Categpry'  =>$_REQUEST['category'],
                        'updateItem' => "successful"
                        );
		 $json = json_encode($toJson);
		 echo $json;
	      }
	   else{
	   
			 header("Location:..\View\profile.php");
		   }
	     }
	else if($platForm=='android')
	  {  $toJson= array('updateItem' => "unsuccessful");
	    $json = json_encode($toJson);
		 echo $json;
	  }
	  else {  
	header("Location:..\View\profile.php");
		}





?>