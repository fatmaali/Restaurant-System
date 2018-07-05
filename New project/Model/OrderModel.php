<?php
ob_start();
session_start();

require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
///////////////////////////// Get the input data //////////////////////////////////////
//  $in=json_decode($_POST['']); 
$platForm=$_REQUEST['platform'];
if (!isset($_SESSION["UserID"] )  )
{
	if($platForm=='android')
	{
		$J=array(
			'Order'=>"login"
		);
		echo json_encode($J);
	}
	else
	{
		header("Location:../View/login.php");
	}
}
else
{
	$userid=$_SESSION["UserID"];
	$itemID=$_REQUEST['itemID'];

	$OrderObj = new Order(NULL);
	$OrderObj->setItemID($itemID);
	$OrderObj->setCustomerID($userid);

	//////////////////////////// check the data ////////////////////////////////////////////
	$res=Order::MakeOrder($OrderObj);

	if($res!=null)
	{
		if($platForm=='android')
		{
			$J=array(
					'Order'=>"successful",
					'userID'=>$userid,
					'providerID'=>$res->getNotificationTo(),
					'itemID'=>$itemID,
					'orderID'=>$res->getOrderID(),
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
				'Order'=>"unsuccessful"
			);
			echo json_encode($J);
		}
	}
}
?>