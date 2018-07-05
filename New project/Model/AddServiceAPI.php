<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
$platForm =$_REQUEST['platform'];
$queryObj= new QueryBuilder;
$userID= $_REQUEST['UserID'] + "0";

$itemObj=new Item(NULL);
$itemObj->setMealName($_REQUEST['name']);
$itemObj->setMealPrice($_REQUEST['price']);
$itemObj->setItemDescription($_REQUEST['Desc']);
$itemObj->setItemCategory($_REQUEST['category']);
$itemObj->setMenuID($_REQUEST['MenuID']);
$queryObj->addItem($itemObj);

if(!empty($_REQUEST['name'])&& !empty($_REQUEST['price'])&& !empty($_REQUEST['Desc'])&& !empty($_REQUEST['category'])&& !empty($userID))
 {
  if($platForm=='android')
	      { 
	        $toJson= array(
                        'MealName' => $_REQUEST['name'],
                        'MealPrice' => $_REQUEST['price'],
                        'Description' => $_REQUEST['Desc'],
                        'Category' => $_REQUEST['category'],
                        'MenuID' => $_REQUEST['MenuID'],
                        'AddMeal' => "successful"
                        );
		 $json2 = json_encode($toJson);
		 echo $json2;
		}

}

?>