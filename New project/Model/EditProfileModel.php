<?php
session_start();
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';




$UserObj = new User($_SESSION['UserID']);
$UserObj->setUserFname($_REQUEST['fname']);
$UserObj->setUserLname($_REQUEST['lname']);
$UserObj->setUserMobile($_REQUEST['mobile']);
$UserObj->setUserGender($_REQUEST['gender']);
$UserObj->setGov($_REQUEST['governorate']);

#echo var_dump($UserObj);


$platForm=$_REQUEST['platform'];
 
  /* $queryObj= new QueryBuilder;
   $queryObj->updateUser($UserObj);
*/


/*
if($_REQUEST['usertype'] == 'customer' || $_REQUEST['usertype']=='provider')
{
*/	
 $queryObj= new QueryBuilder;
 if(!empty($_REQUEST['fname'])&& !empty($_REQUEST['lname'])&& !empty($_REQUEST['phone'])&& !empty($_REQUEST['gender'])&& !empty($_REQUEST['Governorate']))
 {
 	
 
  
   $queryObj->updateUser($UserObj);
	
		 if($platForm=='android')
	      { 
	        $toJson= array(
                        'fname' => $_REQUEST['fname'],
                        'lname' => $_REQUEST['lname'],
                        'mobile'  => $_REQUEST['mobile'],
                        'gender' => $_REQUEST['gender'],
                        'governorate' => $_REQUEST['governorate'],
                        'update' => "successful"
                        );
		 $json = json_encode($toJson);
		 echo $json;
	      }
	   else{
	   
			 header("Location:..\View\profile.php");
		   }
	     }
	else if($platForm=='android')
	  {  $toJson= array('update' => "unsuccessful");
	    $json = json_encode($toJson);
		 echo $json;
	  }
	  else {  
	header("Location:..\View\profile.php");
		}





?>