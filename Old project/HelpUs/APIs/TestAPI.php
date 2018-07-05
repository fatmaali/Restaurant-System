<?php

echo $_REQUEST['pic'];

$toJson=array(
  'pic' => $_REQUEST['pic'], 
    'view'=>"Successful"

  );
  
  $json2 = json_encode($toJson);
  echo $json2;



?>