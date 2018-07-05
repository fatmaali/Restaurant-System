<?php
require_once '../Controller/QueryBuilder.php';

/*

userID
postID

*/

 $queryObj= new QueryBuilder;            

if(!empty($_REQUEST['userID'])&&!empty($_REQUEST['postID']) )
{    



  $flag=$queryObj->AddSpamReport($_REQUEST['postID'] , $_REQUEST['userID']);                  
    if($flag=="true"){
       $toJson= array(
                    
                    'Addreport' => "Successful"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
    
   }

  else
  {
	 $toJson= array(
                
                    'AddReport' => "unSuccessful"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
	
}
}
 else
  {
     $toJson= array(
                
                    'AddReport' => "unSuccessful Empty Fields"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
    
}
?>