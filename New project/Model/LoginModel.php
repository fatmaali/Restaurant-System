<?php
ob_start();
session_start();

require_once '..\Controller\QueryBuilder.php';

///////////////////////////// Get the input data //////////////////////////////////////
//  $in=json_decode($_POST['']); 
$platForm=$_REQUEST['platform'];
$UserObj = new User(NULL);
$UserObj->setUserEmail($_REQUEST['email']);
$UserObj->setUserPassword(sha1($_REQUEST['password']));

//////////////////////////// check the data ////////////////////////////////////////////
$res=User::login($UserObj);

if(!empty($res))
{   
	$_SESSION['UserID'] = $res[0]->getUserID();
	$_SESSION['Username'] = $res[0]->getUserName();
	
/*	$queryObj = new QueryBuilder;
    $flag=$queryObj->checkMenuIsExist($res[0]->getUserID());
    
    if($flag != TRUE)
{ 
$MenuObj= new Menu(NULL);
	$MenuObj->setName($_SESSION['Username']);
	$MenuObj->setProviderID($_SESSION['UserID']);
    $r=$queryObj->AddM($MenuObj); 
    $_SESSION['MenuID']=$r;
}*/
	
	
	if($platForm=='android')
	{
		$J=array(
				'logedin'=>"successful",
				'fname' => $res[0]->getUserFname(),
                'lname' =>  $res[0]->getUserLname(),
                'username' => $res[0]->getUserName(),
                'email' =>  $res[0]->getUserEmail(),
                'mobile'  =>  $res[0]->getUserMobile(),
                'gender' =>  $res[0]->getUserGender(),
                'password1' =>  $res[0]->getUserPassword(),
                'usertype' => $res[0]->getUserType(),
                'governorate' =>$res[0]->getGov() 
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
			'logedin'=>"unsuccessful"
		);
		echo json_encode($J);
	}
	else
	{
		header("Location:../View/Homepage.php");
	}		
}
?>