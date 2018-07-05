<?php
class Review
{
   private $ID;
   private $rate;
   private $comment;
   private $clientID;
   private $itemID;
      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   function __construct ($id)
	{
		if ($id !="")
	   {	
		$DBConn=new Connection;
		$sql="select * from review where ID=$id";
		$res= $DBConn->Conn->query($sql);
		foreach($res as $rows)
		{
		   $this->ID=$rows['ID'];
		   $this->rate= $rows['rate'];
		   $this->comment= $rows['comment'];
		   $this->clientID= $rows['clientID'];
		   $this->itemID=$rows['itemID'];
		}
	  }	
	}
   /////////////////////////////////////////////////////////setters///////////////////////////////////////////////////////
	   public function setID($RID)
	  {
		$this->ID=$RID;
	  }
	  public function setRate($Rate)
	  {
		$this->rate=$Rate;
	  }
	  public function setComment($Comment)
	  {
		$this->comment=$Comment;
	  }
	  public function setClientID($CID)
	  {
		$this->clientID=$CID;
	  }
	 public function setItemID($ItemID)
	  {
		$this->itemID=$ItemID;
	  }
	///////////////////////////////////////////////////////////getters///////////////////////////////////////////////////////////////
	  function getID()
	  {
		return $this->ID;
	  }
	  function getRate()
	  {
		return $this->rate;
	  }
	  function getComment()
	  {
		return $this->comment;
	  }
	  function getClientID()
	  {
		return $this->clientID;
	  }
	  function getItemID()
	  {
		return $this->itemID;
	  }
	  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	  static function MakeReview($reviewObj)
	  {
			$QueryObj= new QueryBuilder;
			if($QueryObj->selectReview($reviewObj->getClientID(),$reviewObj->getItemID())==null)
			{			
				return $QueryObj->addReview($reviewObj);
			}
			return null;
	  }
  }
?>