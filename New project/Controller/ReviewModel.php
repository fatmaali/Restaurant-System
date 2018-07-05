<?php
ob_start();
session_start();

require_once '..\Controller\QueryBuilder.php';

///////////////////////////// Get the input data //////////////////////////////////////
//  $in=json_decode($_POST['']); 
$platForm=$_REQUEST['platform'];
if (!isset($_SESSION["UserID"] )  )
{
	if($platForm=='android')
	{
		$J=array(
			'Review'=>"login"
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
	$review=$_REQUEST['review'];
	$rate=$_REQUEST['rate'];
	
	$reviewObj = new Review(NULL);
	$reviewObj->setItemID($itemID);
	$reviewObj->setClientID($userid);
	$reviewObj->setComment($review);
	$reviewObj->setRate($rate);
	//////////////////////////// check the data ////////////////////////////////////////////
	$res=Review::MakeReview($reviewObj);

	if($res!=null)
	{
		if($platForm=='android')
		{
			$J=array(
					'Review'=>"successful",
					'reviewID'=>$res,
					'userID'=>$userid,
					'itemID'=>$itemID,
					'review'=>$review,
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
				'Review'=>"unsuccessful"        
			);
			echo json_encode($J);
		}
	}
}
?>