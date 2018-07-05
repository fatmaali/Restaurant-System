<?php
session_start();
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';



$platForm=$_REQUEST['platform'];



if(!empty($_REQUEST['password1']) && !empty($_REQUEST['password2']))
{
	if($_REQUEST['password1']== $_REQUEST['password2'])
	{
		$User = new User($_SESSION['UserID']);
		$User->setUserPassword(sha1($_REQUEST['password1']));
		$queryObj= new QueryBuilder;
		$queryObj->updateUserPass($User);
		#echo var_dump($User);
		
		 if($platForm=='android')
	      { 
	        $toJson= array(
                        'password' => $_REQUEST['password1'],
                        'ChangePass' => "successful"
                        );
		 $json = json_encode($toJson);
		 echo $json;
	      }
	    else{
	   
			 header("Location:..\View\profile.php");
		   }
	  
	}
	else if($platForm=='android')
	  {  $toJson= array('ChangePass' => "unsuccessful , password doen't match");
	    $json = json_encode($toJson);
		 echo $json;
	  }
	   else{
	   
			 header("Location:..\View\profile.php");
		   }
	
}
else if($platForm=='android')
	  {  $toJson= array('ChangePass' => "unsuccessful ,The password did't set");
	    $json = json_encode($toJson);
		 echo $json;
	  }
 else{
	   
			 header("Location:..\View\profile.php");
		   }
		   
		   
?>