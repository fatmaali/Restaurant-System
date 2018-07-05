<?php

require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
///////////////////////////// Get the input data //////////////////////////////////////
//  $in=json_decode($_POST['']); 
$platForm=$_REQUEST['platform'];
$UserObj = new User(NULL);
$UserObj->setUserEmail($_REQUEST['email']);
$UserObj->setUserPassword(sha1($_REQUEST['password']));

$res=User::login($UserObj);

if(!empty($res))
{   
	$queryObj = new QueryBuilder;
    $flag=$queryObj->checkMenuIsExist($res[0]->getUserID());
    
    if($flag != TRUE)
    { 
    $MenuObj= new Menu(NULL);
	$MenuObj->setName($res[0]->getUserName());
	$MenuObj->setProviderID($res[0]->getUserID());
 // global  $MID;
  $MID=$queryObj->AddM($MenuObj); 
   // echo $MID;
    }
    else
    {
	$MID=$queryObj->selectMenuIdByName($res[0]->getUserName());
    }
  
	
	if($platForm=='android')
	{ 
		$J=array(
				'logedin'=>"successful",
				'UserID' => $res[0]->getUserID(),
				'fname' => $res[0]->getUserFname(),
                'lname' =>  $res[0]->getUserLname(),
                'username' => $res[0]->getUserName(),
                'email' =>  $res[0]->getUserEmail(),
                'mobile'  =>  $res[0]->getUserMobile(),
                'gender' =>  $res[0]->getUserGender(),
                'password1' =>  $res[0]->getUserPassword(),
                'usertype' => $res[0]->getUserType(),
                'governorate' =>$res[0]->getGov() ,
                'MenuID'      =>$MID
		);
		echo json_encode($J);
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
}
?>