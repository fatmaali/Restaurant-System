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
			'Rate'=>"login"
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
	$toUser=$_REQUEST['to'];
	$rate=$_REQUEST['rate'];
	
	$rateObj = new Rate(NULL);
	$rateObj->setRateFrom($userid);
	$rateObj->setRateTo($toUser);
	$rateObj->setRate($rate);
	//////////////////////////// check the data ////////////////////////////////////////////
	$res=Rate::MakeRate($rateObj);

	if($res!=null)
	{
		if($platForm=='android')
		{
			$J=array(
					'Rate'=>"successful",
					'rateID'=>$res,
					'userID'=>$userid,
					'to'=>$toUser,
					'rate'=>$rate
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
				'Rate'=>"unsuccessful"        
			);
			echo json_encode($J);
		}
	}
}
?>