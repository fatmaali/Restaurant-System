<?php
require_once '../Controller/QueryBuilder.php';

$queryObj= new QueryBuilder;

if(!empty($_REQUEST['UserID']))  // if no continue in posts without login\\
 {
 	 
  
	
 	$Result=$queryObj->SelectNotificationtByUserID($_REQUEST['UserID']);

	if(!empty($Result))
	{
			

	//	echo var_dump($postObj);
		
	  $toJson=array();	   //create array 
      foreach($Result as $res)
      {
      
	$postObj= new Notification($res->getNotiID());
	//echo var_dump($postObj);
	array_push($toJson,array(
	'NotiID' => $postObj->getNotiID(),
	'PostID' => $postObj->getPostID(),
	'Notifi_From' => $postObj->getNotiFrom()  ,
    'Notifi_To' => $postObj->getNotiTo() ,
    'Date' =>$postObj->getDate() ,
    'Content' =>$postObj->getContent() ,
    'View'=>"Successful"
	)
	);
	

	
     }
     $json2 = json_encode($toJson);
	echo $json2;	
   }
   else{
   	$toJson=array('View' => 'No Notification Found');
   	
   
   $json2 = json_encode($toJson);
	echo $json2;
}
}


else
{

	     $toJson= array( 'View posts' => "unsuccessful , need login" );
		 $json2 = json_encode($toJson);
		 echo $json2;

}


?>