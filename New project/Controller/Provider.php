<?php
class Provider extends User
{  private $ID;
   private $workingHours;
   private $hotLine;
   private $address;
   private $available;
   
   
   
   
    function __construct ($id)
	{
		if ($id !="")
	   {	
		$DBConn=new Connection;
		$sql="select * from provider where providerID=$id";
		$res= $DBConn->Conn->query($sql);
		foreach($res as $rows)
		{
		   $this->ID=$rows['providerID'];
		   $this->workingHours= $rows['workingHours'];
		   $this->hotLine= $rows['hotLine'];
		   $this->address= $rows['address'];
		   $this->menuID=$rows['menuID'];
		   $this->available=$rows['available'];
		   
		}
	  }	
	}
   /////////////////////////////////////////////////////////setters///////////////////////////////////////////////////////
	  public function setWorkingHours($WH)
	  {
		$this->workingHours=$WH;
	  }
	  public function setProviderID($id)
	  {
		$this->ID=$id;
	  }
	  
	  
	  public function setHotLine($HL)
	  {
		$this->hotLine=$HL;
	  }
	  public function setAddress($Add)
	  {
		$this->address=$Add;
	  }
	  public function setAvailable($A)
	  {
		$this->available=$A;
	  }
	///////////////////////////////////////////////////////////getters///////////////////////////////////////////////////////////////
	  function getWorkingHours()
	  {
		return $this->workingHours;
	  }
	  function getProviderID()
	  {
		return $this->ID;
	  }
	  
	  function getHotLine()
	  {
		return $this->hotLine;
	  }
	  function getAddress()
	  {
		return $this->address;
	  }
	  function getAvailable()
	  {
		return $this->available;
	  }
  }
?>