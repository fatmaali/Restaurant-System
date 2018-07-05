<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';



$UserObj = new User(NULL);
$UserObj->setUserFname($_REQUEST['fname']);
$UserObj->setUserLname($_REQUEST['lname']);
$UserObj->setUserName($_REQUEST['username']);
$UserObj->setUserEmail($_REQUEST['email']);
$UserObj->setUserMobile($_REQUEST['mobile']);
$UserObj->setUserGender($_REQUEST['gender']);
$UserObj->setUserPassword(sha1($_REQUEST['password1']));
$UserObj->setUserType($_REQUEST['usertype']);
$UserObj->setGov($_REQUEST['governorate']);


$platForm=$_REQUEST['platform']; 




if(!empty($_REQUEST['fname'])&&!empty($_REQUEST['lname'])&&!empty($_REQUEST['username'])&&!empty($_REQUEST['email'])&&!empty($_REQUEST['mobile'])&&!empty($_REQUEST['gender'])&&!empty($_REQUEST['usertype'])&&!empty($_REQUEST['password1'])&&!empty($_REQUEST['governorate']))
{
	

$p1=$_REQUEST['password1'];
$p2=$_REQUEST['password2'];
	



if($p1 == $p2 && strlen($p1)>=8 &&($_REQUEST['usertype']=='customer' || $_REQUEST['usertype']=='provider'))
{  
   
	$flag = User::signup($UserObj);
	if($flag)
	{
		 if($platForm=='android')
	      { 
	        $toJson= array(
                        'fname' => $_REQUEST['fname'],
                        'lname' => $_REQUEST['lname'],
                        'username' => $_REQUEST['username'],
                        'email' => $_REQUEST['email'],
                        'mobile'  => $_REQUEST['mobile'],
                        'gender' => $_REQUEST['gender'],
                        'password1' => sha1($_REQUEST['password1']),
                        'usertype' => $_REQUEST['usertype'],
                        'governorate' => $_REQUEST['governorate'],
                        'signup' => "successful"
                        );
		 $json = json_encode($toJson);
		 echo $json;
		}
	   else{
	   
			 header("Location:..\View\Login.php");
		}
	}
	else if($platForm=='android')
	  {  $toJson= array('signup' => "unsuccessful");
	    $json = json_encode($toJson);
		 echo $json;
	  }
	  else {  
	header("Location:..\View\Login.php");
		}
}

else if($platForm=='android')
	  {  $toJson= array('signup' => "password doen't match");
	    $json = json_encode($toJson);
		 echo $json;
	  }
	  else {  
	         header("Location:..\View\Login.php");
		   }
}
 else{
	   
			 header("Location:..\View\Login.php");
		}	   



?>