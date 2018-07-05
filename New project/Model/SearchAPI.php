<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';


$queryObj= new QueryBuilder;

$platForm =$_REQUEST['platform'];
if(!empty($_REQUEST['Word']))
 {
   
  if($platForm=='android')
	{ $toJson=array();
	$Result=$queryObj->searchItem($_REQUEST['Word']);	
      foreach($Result as $res)
      {
    $User= new User($queryObj->selectProvIDByMenu($res->getMenuID()));
	$itemObj= new Item($res->getID());
	array_push($toJson,array(
	'ItemID' => $res->getID(),
	'MealName' => $res->getMealName(),
    'MealPrice' => $res->getMealPrice(),
    'Description' => $res->getItemDescription(),
    'Category' =>$res->getItemCategory(),
    'MenuID' => $res->getMenuID(),
    'ItemRate' => $res->getRate(),
    'NumOfOrders' => $res->getNumbOfOrders(),
    'ProviderID' => $queryObj->selectProvIDByMenu($res->getMenuID()),
    'governorate' => $User->getGov(),
    'Search Item' => "Found"
	)
	);
	

	
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

                        'Search Item' => "NotFound"
                        );
		 $json2 = json_encode($toJson);
		 echo $json2;
		}
}

?>