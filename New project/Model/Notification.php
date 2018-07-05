<?php
class Notification
{
   private $ID;
   private $from;
   private $to;
   private $message;
   private $orderID;
   private $nTime;
   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   function __construct ($id)
	{
		if ($id !="")
	   {	
		$DBConn=new Connection;
		$sql="select * from notification where ID=$id";
		$res= $DBConn->Conn->query($sql);
		foreach($res as $rows)
		{
		   $this->ID=$rows['ID'];
		   $this->from= $rows['fromUser'];
		   $this->to= $rows['toUser'];
		   $this->message= $rows['message'];
		   $this->orderID=$rows['orderID'];
		   $this->nTime=$rows['time'];
		}
	  }	
	}
   /////////////////////////////////////////////////////////setters///////////////////////////////////////////////////////
	  public function setNotificationID($NID)
	  {
		$this->ID=$NID;
	  }
	  public function setNotificationFrom($F)
	  {
		$this->from=$F;
	  }
	  public function setNotificationTo($T)
	  {
		$this->to=$T;
	  }
	  public function setMessage($M)
	  {
		$this->message=$M;
	  }
	  public function setOrderID($O)
	  {
		$this->orderID=$O;
	  }
	  public function setTime($t)
	  {
		$this->nTime=$t;
	  }
	///////////////////////////////////////////////////////////getters///////////////////////////////////////////////////////////////
	  function getNotificationID()
	  {
		return $this->ID;
	  }
	  function getNotificationFrom()
	  {
		return $this->from;
	  }
	  function getNotificationTo()
	  {
		return $this->to;
	  }
	  function getMessage()
	  {
		return $this->message;
	  }
	  function getOrderID()
	  {
		return $this->orderID;
	  }
	  function getTime()
	  {
		return $this->nTime;
	  }
	  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	  static function Confirm($NotObject)
	{  
		$QueryObj= new QueryBuilder;
		$ordID=$NotObject->getOrderID();
		$userID=$NotObject->getNotificationFrom();
		$pID=$NotObject->getNotificationTo();
		//////////////////////////////////////
		$userObj=new User($pID);
		$userName=$userObj->getUserName();
		/////////////////////////////////////
		$itemName=$QueryObj->selectItemFromOrder($ordID)->getMealName();
		/////////////////////////////////////
		
		$NotObj= new Notification(Null);
		$NotObj->setNotificationFrom($_SESSION["UserID"]);
		$NotObj->setNotificationTo($userID);
		$NotObj->setOrderID($ordID);
		$NotObj->setMessage($userName." confirmed your order to ".$itemName);
		$NotObj->setTime(date("Y-m-d h:i:sa"));
		$QueryObj->addNotification($NotObj);
		return $NotObj;
	}
  }
?>