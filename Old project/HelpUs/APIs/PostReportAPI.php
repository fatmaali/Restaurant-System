<?php
require_once '../Controller/QueryBuilder.php';

/*
Names :

userID
postID
finding_place
finding_date
Description
contactInfo

*/

$queryObj= new QueryBuilder;



                        

if(!empty($_REQUEST['postID'])&& !empty($_REQUEST['finding_place'])&& !empty($_REQUEST['finding_date'])&& !empty($_REQUEST['Description']) && !empty($_REQUEST['userID']))
{     

$date = DateTime::createFromFormat('d-m-Y', $_REQUEST['finding_date'])->format('Y-m-d');

$reportObj=new Report(NULL);
$reportObj->setUserID($_REQUEST['userID']);
$reportObj->setPostID($_REQUEST['postID']);
$reportObj->setWhereFind($_REQUEST['finding_place']);
$reportObj->setWhenDate($date);
$reportObj->setDesOfChild($_REQUEST['Description']);
$reportObj->setContact($_REQUEST['contactInfo']);

$queryObj->MakeReport($reportObj);
       $toJson= array(
                   
                    'make' => "Successful!"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
    
}
else
{
	 $toJson= array(
                
                    'make' => "unSuccessful! Empty fields"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
	
}
?>