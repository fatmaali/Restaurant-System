<?php
ob_start();
session_start();

require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
///////////////////////////// Get the input data //////////////////////////////////////
$userID=$_SESSION["UserID"];
$platForm=$_REQUEST['platform'];
$orderID=$_REQUEST['orderID'];

//////////////////////////// Cancel Order ////////////////////////////////////////////

$orderObj = new Order($orderID);
$QueryObj= new QueryBuilder;
$userType=$QueryObj->selectUserType($userID);
if($userType[0]=="customer")
{
	$res=Order::CustomerCancel($orderObj);
	if($res!=null)
	{
		if($platForm=='android')
		{
			$J=array(
					'cancel'=>"successful",
					'userID'=>$userID,
					'providerID'=>$res->getNotificationTo(),
					'itemID'=>$QueryObj->selectItemFromOrder($res->getOrderID())->getID(),
					'orderID'=>$orderID,
					'NotID'=>$res->getNotificationID(),
					'time'=>$res->getTime(),
					'msg'=>$res->getMessage()
			);
			echo json_encode($J);
		}
		else	
		{
			header("Location:../View/profile.php");
		}
	}
	else
	{
		if($platForm=='android')
		{
			$J=array(
					'cancel'=>"unsuccessful"
			);
			echo json_encode($J);
		}
		else	
		{
			header("Location:../View/profile.php");
		}
	}
}
else
{
	$res=Order::ProviderCancel($orderObj);
	if($res!=null)
	{
		if($platForm=='android')
		{
			$J=array(
					'cancel'=>"successful",
					'providerID'=>$userID,
					'userID'=>$res->getNotificationTo(),
					'itemID'=>$QueryObj->selectItemFromOrder($res->getOrderID())->getID(),
					'orderID'=>$orderID,
					'NotID'=>$res->getNotificationID(),
					'time'=>$res->getTime(),
					'msg'=>$res->getMessage()
			);
			echo json_encode($J);
		}
		else	
		{
			header("Location:../View/profile.php");
		}
	}
	else
	{
		if($platForm=='android')
		{
			$J=array(
					'cancel'=>"unsuccessful"
			);
			echo json_encode($J);
		}
		else	
		{
			header("Location:../View/profile.php");
		}
	}
}
?>