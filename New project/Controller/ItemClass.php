<?php
require_once 'DBConnection.php';

class Item
{
	
	private $ID;
	private $MenuID;
	private $MealName;
	private $MealPrice;
	private $ItemDescription;
	private $ItemCategory;
	private $Rate;
    private $NumbOfOrders;
	
	
	
	
	 function __construct ($id)
        {
           
            
            if ($id !="")
		   {	
		    $DBConn=new Connection;
			$sql="select * from item where ID=$id";
	        $res= $DBConn->Conn->query($sql);
	        foreach($res as $rows)
	        {
	           $this->ID=$rows['ID'];
	           $this->MealName= $rows['Name'];
	           $this->MealPrice= $rows['Price'];
		       $this->MenuID= $rows['MenuID'];
		       $this->ItemDescription= $rows['ItemDescription'];
		       $this->ItemCategory= $rows['CategoryName'];
		       $this->Rate= $rows['Rate'];
		       $this->NumbOfOrders= $rows['NumbOfOrders'];
		    }
	
	      }
			
			
        }
	
	public function getID()
	{
		return $this->ID;
	}
	
	public function getMealName()
	{
		return $this->MealName;
	}
	
	public function getMealPrice()
	{
		return $this->MealPrice;
	}
	
	public function getItemDescription()
	{
		return $this->ItemDescription;
	}
	
	public function getMenuID()
	{
		return $this->MenuID;
	}
	
	public function getItemCategory()
	{
		return $this->ItemCategory;
	}
	
	public function getRate()
	{
		return $this->Rate;
	}
	public function getNumbOfOrders()
	{
		return $this->NumbOfOrders;
	}
	

	public function setMealName($name)
	{
		$this->MealName=$name;
	}
	
	public function setMealPrice($price)
	{
		$this->MealPrice=$price;
	}
	
	public function setItemDescription($des)
	{
		$this->ItemDescription=$des;
	}
	public function setMenuID($id)
	{
		$this->MenuID=$id;
	}
	
		public function setRate($rate)
	{
		$this->Rate=$rate;
	}

	
	public function setItemCategory($category)
	{
		$this->ItemCategory=$category;
	}
	public function setNumbOfOrders($no)
	{
		$this->ItemCategory=$no;
	}
	
}









?>