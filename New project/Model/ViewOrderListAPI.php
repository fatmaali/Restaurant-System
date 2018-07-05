<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
#require_once '../Controller/QueryBuilder.php';


$platForm =$_REQUEST['platform'];
$queryObj= new QueryBuilder;



//echo var_dump($Result);



if(!empty($_REQUEST['UserID']))
 {
 	 
  if($platForm=='android')
	{
	$User= new User($_REQUEST['UserID']);
 	if($User->getUserType()=='provider')
	{
	   $Result=$queryObj->selectAllProviderOrders($_REQUEST['UserID']);
		
	}
	else if($User->getUserType()=='customer')
	{
		$Result=$queryObj->selectAllCustomerOrders($_REQUEST['UserID']);
	}
	if(!empty($Result))
	{
			
		
	  $toJson=array();	
      foreach($Result as $res)
      {
      	
    $Provider= new User($res->getProviderID());
    $Customer= new User($res->getCustomerID());
	$itemObj= new Item($res->getID());
	array_push($toJson,array(
	'ItemID' => $itemObj->getID(),
	'MealName' => $itemObj->getMealName(),
    'MealPrice' => $itemObj->getMealPrice(),
    'Description' => $itemObj->getItemDescription(),
    'Category' =>$itemObj->getItemCategory(),
    'MenuID' => $itemObj->getMenuID(),
    'ItemRate' => $itemObj->getRate(),
    'NumOfOrders' => $itemObj->getNumbOfOrders(),
    'ProviderID' => $Provider->getUserID(),
    'ProviderUsername' => $Provider->getUserName(),
    'ProviderFullName' => $Provider->getUserFname()." ".$Provider->getUserLname(),
    'CustomerID' => $Customer->getUserID(),
    'CustomerUsername' => $Customer->getUserName(),
    'CustomerFullName' => $Customer->getUserFname()." ".$Customer->getUserLname(),
    'View Order List' => "successful"
	)
	);
	

	
     }
     	
   }
   else{
   	$toJson=array('View Order List' => 'No Orders Found');
   	
   }
   $json2 = json_encode($toJson);
	echo $json2;
}
}

else
{
	if($platForm=='android')
	      { 
	        $toJson= array(

                        'View Order List' => "unsuccessful"
                        );
		 $json2 = json_encode($toJson);
		 echo $json2;
		}
}

?>