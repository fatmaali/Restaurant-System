<?php
include "orderclass.php";
$s=new order();
$ordertext=$_POST["hid"];
$total=$_POST["hiddenX"];
$adress=$_POST["adress"];
$phone=$_POST["telephone"];
$hour=$_POST["hour"];
$minute=$_POST["minit"];
$pmoram=$_POST["amorpm"];
$s->store_Order($ordertext,$total,$adress,$phone,$hour,$minute,$pmoram);
?>