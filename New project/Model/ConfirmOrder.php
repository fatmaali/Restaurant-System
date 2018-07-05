<?php
ob_start();
session_start();

require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
///////////////////////////// Get the input data //////////////////////////////////////
//  $in=json_decode($_POST['']); 
$notID=$_REQUEST['notID'];
$platForm=$_REQUEST['platform'];

//////////////////////////// Confirm Order ////////////////////////////////////////////

$NotObj = new Notification($notID);
$res=Notification::Confirm($NotObj);
$QueryObj= new QueryBuilder;
if($platForm=='android')
	{
		$J=array(
				'confirmation'=>"successful",
				'providerID'=>$res->getNotificationFrom(),
				'userID'=>$res->getNotificationTo(),
				'itemID'=>$QueryObj->selectItemFromOrder($res->getOrderID())->getID(),
				'orderID'=>$res->getOrderID(),
				'NotID'=>$notID,
				'time'=>$res->getTime(),
				'msg'=>$res->getMessage()
		);
		echo json_encode($J);
	}
	else	
	{
		header("Location:../View/profile.php");
	}
?>