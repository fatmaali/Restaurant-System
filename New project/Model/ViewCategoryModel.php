<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
#require_once '../Controller/QueryBuilder.php';


$platForm =$_REQUEST['platform'];
$queryObj= new QueryBuilder;
$category= $_REQUEST['category'];
$Result=$queryObj->selectCategory($category);

//echo var_dump($Result);



if(!empty($_REQUEST['category']))
 {
   
  if($platForm=='android')
	{ $toJson=array();	
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
    'View Category Items' => "successful"
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

                        'View Category Item' => "unsuccessful"
                        );
		 $json2 = json_encode($toJson);
		 echo $json2;
		}
}

?>