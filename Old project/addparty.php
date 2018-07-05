<?php
include "party.php";
$s=new party();
$s->set_name($_REQUEST["costumer"]);
$s->set_Email($_REQUEST["Email"]);
$s->Date=$_REQUEST["date"];
$s->phone=$_REQUEST["phone"];
$s->numofpeople=$_REQUEST["people"];
$s->set_adultnum($_REQUEST["adult"]);
$s->childernnum=$_REQUEST["children"];
$s->seterea1=@$_REQUEST["Area1"];
$s->seterea2=@$_REQUEST["Area2"];
$s->seterea3=@$_REQUEST["Area3"];
$s->seterea4=@$_REQUEST["Area4"];
$s->set_mealtype($_REQUEST["type1"]);
$s->set_bnqtype($_REQUEST["meal1"]);
$s->famstyle1=@$_REQUEST["style1"];
$s->famstyle2=@$_REQUEST["style2"];
$s->famstyle3=@$_REQUEST["style3"];
$s->famstyle4=@$_REQUEST["style4"];
$s->famstyle5=@$_REQUEST["style5"];
$s->famstyle6=@$_REQUEST["style6"];
$s->famstyle7=@$_REQUEST["style7"];
$s->famstyle8=@$_REQUEST["style8"];
$s->famstyle9=@$_REQUEST["style9"];
$s->famstyle10=@$_REQUEST["style10"];

$s->Comment=$_REQUEST["TextArea1"];
$s->set_ext($_REQUEST["amount"]);
if(@$s->search($_REQUEST["date"]))
{
	echo "the email is already found";
	//$s->store_party($s);
	
}	/*$d=$_REQUEST["date"];
    $email_from="fatma.s271@gmail.com";
    $email_to=$_REQUEST["Email"];
     $headeer="from: $email_from \r\n";
     $email_body="thank you for reseving in our reseutent in $d  the party will start from 8:00 pm please dont forget to fill evaluationform after the party. hope for you ahappy time";
     $emailsub="rosto party nofication";
   mail($email_to,$emailsub,$email_body,$headeer);
   if(mail($email_to,$emailsub,$email_body,$headeer)){
   	echo  "ddd";
   }
     else{
	 	echo"3333333";
	 }
}
else
{
	$s->store_party($s);
	$d=$_REQUEST["date"];
}	
if($_POST["submit"]) {
    $email_from="fatma.s271@gmail.com";
    $email_to=$_REQUEST["Email"];
     $headeer="from: $email_from \r\n";
     $email_body="thank you for reseving in our reseutent in $d  the party will start from 8:00 pm please dont forget to fill evaluationform after the party. hope for you ahappy time";
     $emailsub="rosto party nofication";
     mail($email_to,$emailsub,$email_body,$headeer);
     echo $email_to;
     if( mail($email_to,$emailsub,$email_body,$headeer)){
	 	echo "email is already found";
	 }}
*/
else{
	  
ini_set( 'sendmail_from', "myself@my.com" );
ini_set( 'SMTP', "mail.bigpond.com" ); 
ini_set( 'smtp_port', 25 );

  if (isset($_REQUEST['Email']))  {
  
  //Email information
  $From = "eslam.wael.8.ew@gmail.com";
  $To = $_REQUEST['Email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  $headers = "From: $From";
  
  mail( $To,$subject, $comment,$headers);
  
  
  echo "Thank you!!";
  }
  
  
  else  {
  	echo'Faild!!';
  	
  	}
  	
  
}
?>