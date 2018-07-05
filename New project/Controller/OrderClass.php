<?php
require_once 'DBConnection.php';

class Order
{
	
	private $ID;
	private $ProviderID;
	private $CustomerID;
	private $ItemID;
#	private $ItemAmount;
	
	
	
	
	
	 function __construct ($id)
        {
           
            
            if ($id !="")
		   {	
		    $DBConn=new Connection;
			$sql="select * from ordertable where ID=$id";
	        $res= $DBConn->Conn->query($sql);
	        foreach($res as $rows)
	        {
	           $this->ID=$rows['ID'];
	           $this->PID= $rows['PID'];
	           $this->CID= $rows['CID'];
		       $this->ItemID= $rows['ItemID'];
		      # $this->ItemAmount= $rows['ItemAmount'];
		       
		    }
	
	      }
			
			
        }
	
	public function getID()
	{
		return $this->ID;
	}
	
	public function getProviderID()
	{
		return $this->ProviderID;
	}
	
	public function getCustomerID()
	{
		return $this->CustomerID;
	}
	
	public function getItemID()
	{
		return $this->ItemID;
	}
/*	
	public function getItemAmount()
	{
		return $this->ItemAmount;
	}
*/	
	
	
	public function setProviderID($id)
	{
		$this->ProviderID=$id;
	}
	
	public function setCustomerID($id)
	{
		$this->CustomerID=$id;
	}
	
	public function setItemID($id)
	{
		$this->ItemID=$id;
	}
	/*
	public function setItemAmount($Amount)
	{
		$this->ItemAmount=$Amount;
	}
	*/
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////			
	static function MakeOrder($OrderObject)		
	{  		
		$QueryObj= new QueryBuilder;		
		$providerObj=$QueryObj->selectItemProvider($OrderObject->getItemID());		
		if(!empty($providerObj))		
		{		
			$OrderObject->setProviderID($providerObj[0]->getProviderID());		
			$OrderID=$QueryObj->addOrder($OrderObject);		
					
			$userObj=new User($_SESSION["id"]);		
			$userName=$userObj->getUserName();		
					
			$itemObj=new item($OrderObject->getItemID());		
			$itemName=$itemObj->getMealName();		
					
			$NotObj= new Notification(Null);		
			$NotObj->setNotificationFrom($_SESSION["id"]);		
			$NotObj->setNotificationTo($providerObj[0]->getProviderID());		
			$NotObj->setOrderID($OrderID);		
			$NotObj->setMessage($userName." wants to buy ".$itemName." from you.");		
			$NotObj->setTime(date("Y-m-d h:i:s"));		
			$QueryObj->addNotification($NotObj);		
			return true;		
		}		
		return false;		
	}
}









?>