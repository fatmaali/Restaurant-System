<?php
class Menu
{
   private $menuID;
   private $name;
   private $ProviderID;
   
   
   
   
   
   function __construct ($id)
	{
		if ($id !="")
	   {	
		$DBConn=new Connection;
		$sql="select * from menu where menuID=$id";
		$res= $DBConn->Conn->query($sql);
		foreach($res as $rows)
		{
		   $this->menuID=$rows['menuID'];
		   $this->name= $rows['name'];
		}
	  }	
	}
   /////////////////////////////////////////////////////////setters///////////////////////////////////////////////////////
	  public function setMenuID($MID)
	  {
		$this->menuID=$MID;
	  }
	  public function setName($MenuName)
	  {
		$this->name=$MenuName;
	  }
	  public function setProviderID($PID)
	  {
		$this->ProviderID=$PID;
	  }
	  
	///////////////////////////////////////////////////////////getters///////////////////////////////////////////////////////////////
	  function getMenuID()
	  {
		return $this->menuID;
	  }
	  function getName()
	  {
		return $this->name;
	  }
	   function getProviderID()
	  {
		return $this->ProviderID;
	  }
	  
  }
?>