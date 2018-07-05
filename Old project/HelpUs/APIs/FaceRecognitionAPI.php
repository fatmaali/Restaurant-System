<?php


//$strpic=$_REQUEST['UserID'];


$queryUrl = "https://api.kairos.com/enroll";
$rec = "https://api.kairos.com/recognize";
//$ss="https://api.kairos.com/gallery/list_all";

$path = '12.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
//echo $data;




$imageObject = '{"image": "' .$base64. '","subject_id":"1","gallery_name":"helpus"}';

//$imageObject = '{"image": "' .$base64. '","subject_id":"5","gallery_name":"frist"}';



//echo $imageObject;
$APP_ID = "d63132f8";
$APP_KEY = "730ea2ac5dd2d841e03b3668b9a895b3";
 
$request = curl_init($queryUrl);

curl_setopt($request, CURLOPT_POST, true);
curl_setopt($request,CURLOPT_POSTFIELDS, $imageObject);
curl_setopt($request, CURLOPT_HTTPHEADER, array(
        "Content-type: application/json",
        "app_id:d63132f8" ,
        "app_key:730ea2ac5dd2d841e03b3668b9a895b3" 
    )
);
//echo "string";
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($request);
// show the API response
//$s=json_decode($response);
$ar =json_decode($response, true);
// access first element of $ar array
echo $response;

//===========================================================================================



?>