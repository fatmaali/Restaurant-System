<?php
require_once '../Controller/QueryBuilder.php';

/*
postID
UserID
*/


$queryObj= new QueryBuilder;





if(!empty($_REQUEST['postID']))
{ 

$Result=$queryObj->SelectReportByPostID($_REQUEST['postID']);
 //$postObj=  $queryObj->SelectReportByPostID($_REQUEST['postID']);
 
	 $toJson=array();	 
	 foreach($Result as $res)
      {
      
	$postObj= new Report($res->getReportID());
	array_push($toJson,array(
	'ReportID' => $postObj->getReportID(),
	'PostID' => $postObj->getPostID(),
	'UserID' => $postObj->getUserID(),
    'FindingPlace' =>$postObj->getWhereFind() ,
    'FindingDate' =>$postObj->getWhenDate() ,
    'Description' =>  $postObj->getDesOfChild() ,
    'ContactInfo' => $postObj->getContact() ,

    'ViewReport'=>"Successful"
	)
	);

	}
	

    $json2 = json_encode($toJson);
	echo $json2;

}
else
{
	
	     $toJson= array('View Post' => "unsuccessful" );
		 $json2 = json_encode($toJson);
		 echo $json2;
	
}

?>