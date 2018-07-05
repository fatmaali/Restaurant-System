<?php

session_start();
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
/*
if (!isset($_SESSION["UserEmail"] )  )
{
	header("Location: Login.php?error=2");	
}
else if($_SESSION["userType"] == "customer"){
		header("Location:Homepage.php?error=2");
}

*/

$platForm =$_REQUEST['platform'];



$queryObj = new QueryBuilder;
$flag=$queryObj->checkMenuIsExist($_SESSION['UserID']);
#$r=0;
if($flag != TRUE)
{
	$MenuObj= new Menu(NULL);
	$MenuObj->setName($_SESSION['Username']);
	$MenuObj->setProviderID($_SESSION['UserID']);
    $r=$queryObj->AddM($MenuObj); 
    $_SESSION['MenuID']=$r;
    
    if($platForm=='android')
	      { 
	        $toJson= array(
                        'name' =>$_SESSION['Username'],
                        'providerID' => $_SESSION['UserID'],
                        'AddMenu' => "successful"
                        );
		 $json = json_encode($toJson);
		 echo $json;
		}
	
}
else
{
	$menuID=$queryObj->selectMenuIdByName($_SESSION['Username']);
	$_SESSION['MenuID']=$menuID;
	
}

$itemObj=new Item(NULL);
$itemObj->setMealName($_REQUEST['name']);
$itemObj->setMealPrice($_REQUEST['price']);
$itemObj->setItemDescription($_REQUEST['Desc']);
$itemObj->setItemCategory($_REQUEST['category']);
$itemObj->setMenuID($_SESSION['MenuID']);

$queryObj->addItem($itemObj);

  if($platForm=='android')
	      { 
	        $toJson= array(
                        'MealName' => $_REQUEST['name'],
                        'MealPrice' => $_REQUEST['price'],
                        'Description' => $_REQUEST['Desc'],
                        'Category' => $_REQUEST['category'],
                        'AddMeal' => "successful"
                        );
		 $json2 = json_encode($toJson);
		 echo $json2;
		}

header("Location:..\View\profile.php");

?>