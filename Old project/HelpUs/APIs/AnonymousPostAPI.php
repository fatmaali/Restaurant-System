<?php
require_once '../Controller/QueryBuilder.php';

/*
Names :

userID
pic
finding_place
finding_date
name
Description
contactInfo
report_num
*/

 $queryObj= new QueryBuilder;            

if(!empty($_REQUEST['pic'])&& !empty($_REQUEST['finding_place'])&& !empty($_REQUEST['finding_date'])&& !empty($_REQUEST['Description']) && !empty($_REQUEST['userID']))
{    





//$date = DateTime::createFromFormat('d-m-Y', $_REQUEST['finding_date'])->format('Y-m-d');
$date=$_REQUEST['finding_date'];
$PostObj=new AnonymousPost(NULL);
$PostObj->setUserID($_REQUEST['userID']);
$PostObj->setPic($_REQUEST['pic']);
$PostObj->setFindingDate($date);
$PostObj->setFindingPlace($_REQUEST['finding_place']);
$PostObj->setName($_REQUEST['name']);
$PostObj->setConFinding($_REQUEST['Description']);
$PostObj->setContactInfo($_REQUEST['contactInfo']);
$PostObj->setReportNum($_REQUEST['report_num']);
  $queryObj->AddAnonPost($PostObj);                    // Add post to database
  
   
   //date format //
   
   
       $toJson= array(
                    'Picture' => $_REQUEST['pic'],
                    'Name' => $_REQUEST['name'],
                    'FindingPlace' => $_REQUEST['finding_place'],
                    'FindingDate' => $_REQUEST['finding_date'],
                    'Description' => $_REQUEST['Description'],
     	             'ContactInfo' => $_REQUEST['contactInfo'],
                    'Description' => $_REQUEST['Description'],
                    'ReportNumber' => $_REQUEST['report_num'],
                    'AddPost' => "Successful!"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
    
}
else
{
	 $toJson= array(
                
                    'AddPost' => "unSuccessful! Empty fields"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
	
}
?>