<?php
include "resevationclass.php";
session_start();
$s=new orderReservation();
if($_SESSION["UserID"]){
$id=$_REQUEST["email"];
$w=$s->search($id);
if($w){
$s->deleteresev($s,$id);}
}
//DeleteUser($id);}
else{
	

header("Location:login.php");}	
}

?>