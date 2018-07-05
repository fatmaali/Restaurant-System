<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
#require_once '../Controller/QueryBuilder.php';

$platForm =$_REQUEST['platform'];
$queryObj= new QueryBuilder;





if(!empty($_REQUEST['UserID']))
{ 
$User= new User( $_REQUEST['UserID']);
if($User->getUserType()=='provider')
	{
		$MenuID=$queryObj->selectMenuID($_REQUEST['UserID']);
		
	}
	else
	{
		$MenuID=NULL;
	}
  if($platForm=='android')
	{ 
      
	
	$toJson=array(
	'UserID' => $User->getUserID(),
	'fname' => $User->getUserFname(),
    'lname' => $User->getUserLName(),
    'mobile'  => $User->getUserMobile(),
    'gender' => $User->getUserGender(),
    'UserType'=> $User->getUserType(),
    'Username' => $User->getUserName(),
    'Email' => $User->getUserEmail(),
    'Rate' => $User->getUserRate(),
    'governorate' => $User->getGov(),
    'MenuID' => $MenuID,
    'View Profile' => "successful"

	);
	
	$json2 = json_encode($toJson);
	echo $json2;
	
     
   }
}


else
{
	if($platForm=='android')
	      { 
	        $toJson= array(

                        'View profile' => "unsuccessful"
                        );
		 $json2 = json_encode($toJson);
		 echo $json2;
		}
}

?>