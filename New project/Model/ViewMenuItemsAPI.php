<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
#require_once '../Controller/QueryBuilder.php';

$platForm =$_REQUEST['platform'];
$queryObj= new QueryBuilder;


//echo var_dump($Result);


if(!empty($_REQUEST['MenuID']))
 {
  $Result=$queryObj->selectAllProviderMenuItems($_REQUEST['MenuID']);
  
  if($platForm=='android')
	{ 
      foreach($Result as $res)
      {
	$itemObj= new Item( $res->getID());
	$toJson=array(array(
	'ItemID' => $itemObj->getID(),
	'MealName' => $itemObj->getMealName(),
    'MealPrice' => $itemObj->getMealPrice(),
    'Description' => $itemObj->getItemDescription(),
    'Category' =>$itemObj->getItemCategory(),
    'MenuID' => $itemObj->getMenuID(),
    'ItemRate' => $itemObj->getRate(),
    'NumOfOrders' => $itemObj->getNumbOfOrders(),
    'ProviderID' => $queryObj->selectProvIDByMenu($itemObj->getMenuID()),
    'View Items' => "successful"
	)
	);
	
	$json2 = json_encode($toJson);
	echo $json2;
	
     }
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