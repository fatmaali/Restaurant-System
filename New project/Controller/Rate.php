<?php
class Rate
{
   private $ID;
   private $from;
   private $to;
   private $rate;
   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   function __construct ($id)
	{
		if ($id !="")
	   {	
		$DBConn=new Connection;
		$sql="select * from rate where ID=$id";
		$res= $DBConn->Conn->query($sql);
		foreach($res as $rows)
		{
		   $this->ID=$rows['ID'];
		   $this->rate= $rows['Rate'];
		   $this->from= $rows['fromUser'];
		   $this->to= $rows['toUser'];
		}
	  }	
	}
   /////////////////////////////////////////////////////////setters///////////////////////////////////////////////////////
	   public function setID($RID)
	  {
		$this->ID=$RID;
	  }
	  public function setRateFrom($RateFrom)
	  {
		$this->from=$RateFrom;
	  }
	  public function setRateTo($RateTo)
	  {
		$this->to=$RateTo;
	  }
	  public function setRate($Rate)
	  {
		$this->rate=$Rate;
	  }
	 
	///////////////////////////////////////////////////////////getters///////////////////////////////////////////////////////////////
	  function getID()
	  {
		return $this->ID;
	  }
	  function getRateFrom()
	  {
		return $this->from;
	  }
	  function getRateTo()
	  {
		return $this->to;
	  }
	  function getRate()
	  {
		return $this->rate;
	  }
  }
?>