<?php
require_once '/home/teq/public_html/BP/Controller/QueryBuilder.php';
#require_once '../Controller/QueryBuilder.php';

$platForm =$_REQUEST['platform'];
$queryObj= new QueryBuilder;
$category= $_REQUEST['category'];
$Result=$queryObj->selectCategory($category);

//echo var_dump($Result);
if(!empty($_REQUEST['category']))
 {
  if($platForm=='android')
	      { 
	        $toJson= array(
                        'Item Array' => $Result,
                        'View Category Item' => "successful"
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

                        'View Category Item' => "unsuccessful"
                        );
		 $json2 = json_encode($toJson);
		 echo $json2;
		}
}

?>