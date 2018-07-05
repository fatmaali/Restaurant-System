<?php
require_once '../Controller/QueryBuilder.php';

/*

userID

*/

 $queryObj= new QueryBuilder;            

if(!empty($_REQUEST['userID']))
{    



  $queryObj->UpdateConfirmation($_REQUEST['userID']);                    

   
   
       $toJson= array(
                    
                    'UpdateConfirmation' => "Successful!"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
    
}
else
{
	 $toJson= array(
                
                    'UpdateConfirmation' => "unSuccessful!"
                    );
                    
                    
                   
     $json2 = json_encode($toJson);
     echo $json2;
	
}
?>