<?php
include "connect.php";
//connecttodatabase("phpmyadmin");
class order{
	protected $order;
	private $total;
	private $adress;
	private $phone;
	protected $hour;
	protected $mint;
	protected $amorpm;
	function set_adress($NewAdress)
	{
		//if (count($NewName)>5)
		$this->adress=$NewAdress;
	}
function get_adress()
	{
		return $this->adress;
	}
function set_phone($num)
	{
	
		$this->phone=$num;
	}
function get_phone()
	{
		
	
		return $this->phone;
	}
	

	function get_total()
	{
		return $this->total;
	}
	
public function store_Order($ordertext,$total,$adress,$phone,$hour,$minit,$amorpm){
	$sql="INSERT INTO ordermenu(ID,ordertext,total,adress,phone,hour,minit,amorpm) VALUES (NULL,'$ordertext','$total','$adress','$phone','$hour','$minit','$amorpm')";
 echo $sql;
  mysql_query($sql);
}


}