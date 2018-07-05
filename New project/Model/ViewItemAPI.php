<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
#require_once '../Controller/QueryBuilder.php';

$platForm =$_REQUEST['platform'];
$queryObj= new QueryBuilder;

$itemObj= new Item( $_REQUEST['ItemID']);



if(!empty($_REQUEST['ItemID']))
{ 
 $itemObj= new Item( $_REQUEST['ItemID']);
  if($platForm=='android')
	{ 
      
	
	$toJson=array(
	'ItemID' => $itemObj->getID(),
	'MealName' => $itemObj->getMealName(),
    'MealPrice' => $itemObj->getMealPrice(),
    'Description' => $itemObj->getItemDescription(),
    'Category' =>$itemObj->getItemCategory(),
    'MenuID' => $itemObj->getMenuID(),
    'ItemRate' => $itemObj->getRate(),
    'NumOfOrders' => $itemObj->getNumbOfOrders(),
    'ProviderID' => $queryObj->selectProvIDByMenu($res->getMenuID()),
    'View Items' => "successful"

	);
	
	$json2 = json_encode($toJson);
	echo $json2;
	
     
   }
}


else
{
	if($platForm=='android')
	      { 
	        $toJson= array(

                        'View Item' => "unsuccessful"
                        );
		 $json2 = json_encode($toJson);
		 echo $json2;
		}
}

?>