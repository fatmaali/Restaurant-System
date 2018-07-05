<?php


class SpecialOrder
{
	
	private $ID;
	private $ProviderID;
	private $CustomerID;
	private $OrderDescription;
	
	
	
	
	
	 function __construct ($id)
        {
           
            
            if ($id !="")
		   {	
		    $DBConn=new Connection;
			$sql="select * from specialorder where ID=$id";
	        $res= $DBConn->Conn->query($sql);
	        foreach($res as $rows)
	        {
	           $this->ID=$rows['ID'];
	           $this->PID= $rows['PID'];
	           $this->CID= $rows['CID'];
		       $this->OrderDescription= $rows['OrderDescription'];
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
	
	public function getOrderDescription()
	{
		return $this->OrderDescription;
	}
	
	
	
	public function setProviderID($id)
	{
		$this->ProviderID=$id;
	}
	
	public function setCustomerID($id)
	{
		$this->CustomerID=$id;
	}
	
	public function setOrderDescription($OrderDes)
	{
		$this->OrderDescription=$OrderDes;
	}
	
	
}









?>