<?php
include "party.php";
$s=new party();
$em=$_POST["email"];
session_start();
if($_SESSION["UserID"]){
$q=$s->search($em);
if($q){
$s->set_name($q[1]);
$s->Date=$q[3];
$s->set_bnqtype($q[12]);
$s->set_Email($q[2]);
$s->set_mealtype($q[13]);
$s->Comment=$q[24];
$s->phone=$q[4];
$s->numofpeople=$q[5];
$s->set_childnum($q[7]);
$s->set_ext($q[25]);
$s->set_name($q[1]);
$s->famstyle1=$q[14];
$s->famstyle2=$q[15];
$s->famstyle4=$q[16];
$s->famstyle3=$q[17];
$s->famstyle5=$q[18];
$s->famstyle6=$q[19];
$s->famstyle7=$q[20];
$s->famstyle10=$q[21];
$s->famstyle9=$q[22];
$s->famstyle8=$q[23];
$s->seterea1=$q[8];
$s->seterea2=$q[9];
$s->seterea3=$q[10];
$s->seterea4=$q[11];
$s::delete_party($s,$em);
//("Location: SeeAllParty.php?Msg=Record $id was Deleted sucessfully");	
}else{
	echo "the email is not found";
}
}else{
	
	header("location:dologin.php");
}

?>