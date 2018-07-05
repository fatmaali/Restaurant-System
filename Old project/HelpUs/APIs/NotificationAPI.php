<?php
require_once '../Controller/QueryBuilder.php';

/*
Names :

ID
postID
noti_from
noti_to
date
content

*/

$queryObj= new QueryBuilder;
                        

if(!empty($_REQUEST['postID'])&& !empty($_REQUEST['noti_from'])&& !empty($_REQUEST['noti_to'])&& !empty($_REQUEST['content']))
{     

$date = date("Y-m-d H:i:s");

$NotifObj= new Notification(NULL);
$NotifObj->setPostID($_REQUEST['postID']);
$NotifObj->setNotiFrom($_REQUEST['noti_from']);
$NotifObj->setNotiTo($_REQUEST['noti_to']);
$NotifObj->setDate($date);
$NotifObj->setContent($_REQUEST['content']);


  $queryObj->AddNotification($NotifObj);
  
       $toJson= array(
                    
                    'AddNotification' => "Successful!"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
    
}
else
{
	 $toJson= array(
                
                    'AddNotification' => "unSuccessful!Empty fields"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
	
}
?>