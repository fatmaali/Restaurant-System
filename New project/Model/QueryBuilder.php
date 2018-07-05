<?php
require_once 'DBConnection.php';
require_once 'ServiceClass.php';
require_once 'OrderClass.php';
require_once 'SpecialOrderClass.php';
require_once 'ItemClass.php';
require_once 'User.php';
 require_once 'Client.php';
 require_once 'Provider.php';
 require_once 'Notification.php';
 require_once 'Rate.php';
 require_once 'Review.php';
require_once 'Menu.php';






class QueryBuilder extends Connection
{
	###################################   ServiceTable ##########################################
	
	public function addService($ServiseObj)
	{
	  $sql = "INSERT INTO Service(Name) VALUES ('".$ServiseObj->getName()."')";
      $result=  $this->Conn->prepare($sql);
      $result->execute();
	}
	
	
	
	
	
 	##################################   OrderTable #############################################
	
	
	
	
	
	public function addOrder($OrderObj)  // to add new order to database
	{ 
		
		
	  $sql = "INSERT INTO ordertable (PID,CID ,ItemID) VALUES ('".$OrderObj->getProviderID()."','".$OrderObj->getCustomerID()."','".$OrderObj->getItemID()."')";
      $result=  $this->Conn->prepare($sql);
      $result->execute();
      return $this->Conn->lastInsertId();
	}
	
	public function moveOrderToHistoryOrder($OrderID)  //to move order to history 
	{
		$sql="UPDATE ordertable SET IsDeleted=1 WHERE ID=".$OrderID."";
		$result=  $this->Conn->prepare($sql);
        $result->execute();
	}
	
	public function cancelOrder($OrderID)  //to delete the order from the whole system
	{
		$sql="DELETE FROM ordertable WHERE ID=".$OrderID;
		$result=  $this->Conn->prepare($sql);
        $result->execute();
	}
	
	public function selectAllProviderOrders($ProviderID)  //select all provider's order by id 
	{
		
	 $sql="SELECT * FROM ordertable WHERE PID=".$ProviderID;
	$res= $this->Conn->query($sql);
	$i=0;
	$Result;
	foreach($res as $rows)
	{
		$OrderObj=new Order($rows['ID']);
		$Result[$i]=$OrderObj;
		$i++;
	
	}
	return $Result;	
        
	}
	
	public function selectAllCustomerOrders($CustomerID) //select all customer's order by id 
	{
		
	 $sql="SELECT * FROM ordertable WHERE CID=".$CustomerID;
	$res= $this->Conn->query($sql);
	$i=0;
	$Result;
	foreach($res as $rows)
	{
		$OrderObj=new Order($rows['ID']);
		$Result[$i]=$OrderObj;
		$i++;
	
	}
	return $Result;	
	}
	

	
	
	###################################   SpecialOrderTable #########################################
	
	
	
	
	public function addSpecialOrder($OrderObj)  // to add special order to database
	{ 
		
		
	  $sql = "INSERT INTO specialorder (PID,CID ,OrderDescription) VALUES ('".$OrderObj->getProviderID()."','".$OrderObj->getCustomerID()."','".$OrderObj->getOrderDescription()."')";
      $result=  $this->Conn->prepare($sql);
      $result->execute();
	}
	
	public function moveSpecialOrderToHistory($OrderID)  //to move order to history 
	{
		$sql="UPDATE specialorder SET IsDeleted=1 WHERE ID=".$OrderID."";
		$result=  $this->Conn->prepare($sql);
        $result->execute();
	}
	
	public function cancelSpecialOrder($OrderID)  //to delete the order from the whole system
	{
		$sql="DELETE FROM specialorder WHERE ID=".$OrderID;
		$result=  $this->Conn->prepare($sql);
        $result->execute();
	}
	
	public function selectAllProviderSpecialOrders($ProviderID)  //select all provider's order by id 
	{
		$DBConn = new Connection;
	 $sql="SELECT * FROM specialorder WHERE PID=".$ProviderID;
	$res= $this->Conn->query($sql);
	$i=0;
	$Result;
	foreach($res as $rows)
	{
		$OrderObj=new SpecialOrder($rows['ID']);
		$Result[$i]=$OrderObj;
		$i++;
	
	}
	return $Result;	
        
	}
	
	public function selectAllCustomerSpecialOrders($CustomerID) //select all customer's order by id 
	{
	 $sql="SELECT * FROM specialorder WHERE CID=".$CustomerID;
	$res= $this->Conn->query($sql);
	$i=0;
	$Result;
	foreach($res as $rows)
	{
		$OrderObj=new SpecialOrder($rows['ID']);
		$Result[$i]=$OrderObj;
		$i++;
	
	}
	return $Result;	
	}
	



	


############################### Item Table ###################################



	
	
	
	public function addItem($ItemObj)  // to add new order to database
	{ 
		
		
	  $sql = "INSERT INTO item (Name, Price, MenuID, CategoryName, ItemDescription, Rate, NumbOfOrders) VALUES ('".$ItemObj->getMealName()."','".$ItemObj->getMealPrice()."','".$ItemObj->getMenuID()."','".$ItemObj->getItemCategory()."','".$ItemObj->getItemDescription()."','".$ItemObj->getRate()."','".$ItemObj->getNumbOfOrders()."')";
      $result=  $this->Conn->prepare($sql);
      $result->execute();
	}
	
	public function deleteItem($ItemID)  //to move order to history 
	{
		$sql="DELETE FROM item WHERE ID=".$ItemID."";
		$result=  $this->Conn->prepare($sql);
        $result->execute();
	}
	
	
	public function selectAllProviderMenuItems($MID)  //select all provider's order by id 
	{
	 
	 
	 $sql="SELECT * FROM item WHERE MenuID=".$MID;
	 $res= $this->Conn->query($sql);
	 $i=0;
	 $Result;
	foreach($res as $rows)
	{
		$ItemObj=new Item($rows['ID']);
		$Result[$i]=$ItemObj;
		$i++;
	
	}
	return $Result;	
        
	}
	/////////////////////////////////////////
	public function selectAllItemsByCategoty($cat)  //select all provider's order by id 
	{
		$DBObj = new Connection;
	$sql="SELECT * FROM item WHERE CategoryName=:name";
	$res= $DBObj->Conn->prepare($sql);
	$res->execute(array( 'name' => $cat));
	$result=$res->fetch();
	 $i=0;
	 $Result2;
	foreach($result as $rows)
	{
		$ItemObj=new Item($rows['ID']);
		$Result2[$i]=$ItemObj;
		$i++;
	
	}
	return $Result2;	
        
	}

	public function selectAllRecommendItems()  //select all provider's order by id 
	{
		$DBObj = new Connection;
	$sql="SELECT * FROM item  ORDER BY NumbOfOrders DESC LIMIT 5";
	$res= $DBObj->Conn->prepare($sql);
	$res->execute();
	$result=$res->fetch();
	 $i=0;
	 $Result2;
	foreach($result as $rows)
	{
		$ItemObj=new Item($rows['ID']);
		$Result2[$i]=$ItemObj;
		$i++;
	
	}
	return $Result2;	
        
	}

	 public function updateItem($itemObj)
	 { 
		
		
	  $sql = "UPDATE item SET Name='".$itemObj->getMealName()."',Price='".$itemObj->getMealPrice()."',CategoryName='".$itemObj->getItemCategory()."',ItemDescription='".$itemObj->getItemDescription()."' WHERE ID=".$itemObj->getID();
      $result=  $this->Conn->prepare($sql);
      $result->execute();
	}
	public function selectItemProvider($ItemID)
	{
		$sql="SELECT PID FROM item,menu WHERE ID=? and menu.menuID=item.MenuID";
		$res= $this->Conn->prepare($sql);
		$res->bindParam(1, $ItemID);
		$res->execute();
		$result = $res->fetchAll();
		$i=0;
		foreach($result as $rows)
		{
			$ProviderObj=new Provider($rows['PID']);
			$result[$i]=$ProviderObj;
			$i++;
		
		}
		return $result;	
	}
	public function selectItemFromOrder($ordID)
	{
		$sql="SELECT item.ID FROM item,ordertable WHERE ordertable.ID=? and ordertable.ItemID=item.ID";
		$res= $this->Conn->prepare($sql);
		$res->bindParam(1, $ordID);
		$res->execute();
		$result = $res->fetchAll();
		$i=0;
		foreach($result as $rows)
		{
			$ItemObj=new Item($rows['ID']);
			$result[$i]=$ItemObj;
			$i++;
		
		}
		return $result[0];	
	}

    

	public function OrderToCancel($orderID)
	{
		$nowTime = strtotime(date("Y-m-d h:i:sa"));

		$sql="SELECT ID,time FROM ordertable WHERE ID=?";
		$res= $this->Conn->prepare($sql);
		$res->bindParam(1, $orderID);
		$res->execute();
		$result = $res->fetchAll();
		$i=0;
		foreach($result as $rows)
		{
			if(strtotime(date("Y-m-d h:i:sa"))-strtotime($rows['time'])<600)
			{
				return true;
			}
		}
		return false;	
	}
//////////////////////////////////////////////////////////////////// User ///////////////////////////////////////////////////////////////////
	
public function addUser($U)
		{
		  $sql = "INSERT INTO user (userID,UserType ,fname,lname,userName,email,mobile,password,gender,removed , gov) VALUES ('','".$U->getUserType()."','".$U->getUserFname()."','". $U->getUserLname()."','".$U->getUserName()."','".$U->getUserEmail()."','".$U->getUserMobile()."','".$U->getUserPassword()."','".$U->getUserGender()."','".$U->getUserRemoved()."','".$U->getGov()."')";
		  $result=  $this->Conn->prepare($sql);
		  $result->execute();
		 #return $this->Conn->lastInsertId(); ;
		}	
    static function selectUser($ID)   
		{ $DBConn = new Connection;
			$sql="SELECT * FROM user WHERE UserID=".$ID;
			$res= $DBConn->Conn->query($sql);
			//$i=0;
			$Result;
			foreach($res as $rows)
			{
				$UserObj=new User($rows['userID']);
				$Result=$UserObj;
				
			}
			return $Result;	   	
		}
		
	public function selectByEmail($e) 
				{
					$s="SELECT * FROM user WHERE email = ?";
					$res = $this->Conn->prepare($s); 
		$res->bindParam(1, $e);
		$res->execute();
		$result = $res->fetchAll();
		$i=0;		
		foreach($result as $rows)
		{
			$u=new User($rows['userID']);
			$result[$i]=$u;
			$i++;
		}
		return $result;
	}	
	public function selectByUserName($name) 
	{
		$s="SELECT * FROM user WHERE userName = ?";
		$res = $this->Conn->prepare($s); 
		$res->bindParam(1, $name);
		$res->execute();
		$result = $res->fetchAll();
		$i=0;		
		foreach($result as $rows)
		{
			$u=new User($rows['userID']);
			$result[$i]=$u;
			$i++;
		}
		return $result;
	}	
		
		
	
	
	
	
	
	
	public function selectUserType($ID)   
	{
		$sql="SELECT userType FROM user WHERE userID=".$ID;
		$res= $this->Conn->query($sql);
		$i=0;
		$Result;
		foreach($res as $rows)
		{
			
			$Result[$i]=$rows['userType'];
			$i++;
		}
		return $Result;		 	
	}
	public function selectUserEmail($ID)   
	{
		$sql="SELECT email FROM user WHERE UserID=".$ID;
		$res= $this->Conn->query($sql);
		$i=0;
		$Result;
		foreach($res as $rows)
		{
			$UserObj=new User($rows['userID']);
			$Result[$i]=$UserObj;
			$i++;
		}
		return $Result;		
	}
	public function removeUser($ID)            
	{
		$sql="UPDATE user SET removed=1 WHERE userID=".$ID;
		$result=  $this->Conn->prepare($sql);
        $result->execute();
	}
	
///////////////////////////////////////////////////////////////////Client////////////////////////////////////////////////////////////////////
	public function addClient($C)
	{
	  $sql = "INSERT INTO client (clientID) VALUES ('".$C->getUserID()."')";
	  $result=  $this->Conn->prepare($sql);
	  $result->execute();
	}

///////////////////////////////////////////////////////////////////Provider//////////////////////////////////////////////////////////////////
	public function addProvider($P)
	{
	  $sql = "INSERT INTO provider (providerID,workingHours,hotLine,address,deliveryGov,menuID,paymentFees) VALUES ('".$P->getUserID()."','".$P->getWorkingHours()."','".$P->getHotLine()."','".$P->getAddress()."','".$P->getDeliveryGov()."','".$P->getMenuID()."','".$P->getPaymentFees()."')";
	  $result=  $this->Conn->prepare($sql);
	  $result->execute();
	}
	public function selectProvider($ID)   
	{
		$sql="SELECT * FROM user,provider WHERE userID='".$ID."'and providerID=".$ID;
		$res= $this->Conn->query($sql);
		$i=0;
		$Result;
		foreach($res as $rows)
		{
			$ProviderObj=new Provider($rows['userID']);
			$Result[$i]=$ProviderObj;
			$i++;
		}
		return $Result;	 			
	}

///////////////////////////////////////////////////////////////////Menu//////////////////////////////////////////////////////////////////////
	public function addMenu($name , $providerID)
	{
	  $sql = "INSERT INTO menu (name , ProviderID) VALUES ($name , $providerID)";
	  $result= $this->Conn->prepare($sql);
	  $result->execute();
	 # return $this->Conn->lastInsertId();
	 
	}	


    public function  AddM($MObj)
    {
    	$sql = "INSERT INTO menu (name , ProviderID) VALUES ('".$MObj->getName()."','".$MObj->getProviderID()."')";
    	$result= $this->Conn->prepare($sql);
	   $result->execute();
	   return $this->Conn->lastInsertId();
		
	}
    public function checkMenuIsExist($ProviderID)  //select all provider's order by id 
	{
		$DBConn = new Connection;
	 $sql="SELECT * FROM menu WHERE ProviderID=".$ProviderID;
	$res= $this->Conn->query($sql);
	foreach($res as $rows)
	{ return TRUE;
	
	}
	return FALSE;
	}
	

	
	public function selectMenuID($PID)  //select all provider's order by id 
	{
	 $DBConn = new Connection;
	 
	 $sql="SELECT menuID FROM menu WHERE ProviderID=".$PID;
	 $res= $this->Conn->query($sql);
	
	 	 $i=0;
	 $Result;
	 
	foreach($res as $rows)
	{
		$MObj=new Menu($rows['menuID']);
		#$MID=$rows['menuID'];
		
		$Result[$i]=$MObj;
		$i++;
	
	}
	if(!empty($Result))
	{
	    return $Result;	
	}
	else
	{
		return FALSE;
	}

	
		    
	}
	
	public function selectMenuIdByName($name) 
	{
		$s="SELECT * FROM menu WHERE name = ?";
		$res = $this->Conn->prepare($s); 
		$res->bindParam(1, $name);
		$res->execute();
		$result = $res->fetchAll();
				
		foreach($result as $rows)
		{
		  $menuID=$rows['menuID'];
			
		}
		return $menuID;
	}
		
///////////////////////////////////////////////////////////////////Notification//////////////////////////////////////////////////////////////////////	
	public function addNotification($N)
	{
	  $sql = "INSERT INTO notification (ID,fromUser,toUser,message,orderID,time) VALUES ('','".$N->getNotificationFrom()."','".$N->getNotificationTo()."','".$N->getMessage()."','".$N->getOrderID()."','".$N->getTime()."')";
	  $result=  $this->Conn->prepare($sql);
	  $result->execute();  
	  return $this->Conn->lastInsertId();
	}	
///////////////////////////////////////////////////////////////////Rate//////////////////////////////////////////////////////////////////////	
	public function addRate($R)
	{
	  $sql = "INSERT INTO rate (ID,Rate,fromUser,toUser) VALUES ('','".$R->getRate()."','".$R->getRateFrom()."','".$R->getRateTo()."')";
	  $result=  $this->Conn->prepare($sql);
	  $result->execute();  
	}
///////////////////////////////////////////////////////////////////Review////////////////////////////////////////////////////////////////////	
	public function addReview($R)
	{
	  $sql = "INSERT INTO review (ID,rate,comment,clientID,itemID) VALUES ('','".$R->getRate()."','".$R->getComment()."','".$R->getClientID()."','".$R->getItemID()."')";
	  $result=  $this->Conn->prepare($sql);
	  $result->execute();  
	}
	






////////////////////////////// user ///////////////////////////

static function isExist($email , $username) 
	{
		$DBObj = new Connection;
	$sql="SELECT * FROM user WHERE email=:email OR userName= :name ";
	$res= $DBObj->Conn->prepare($sql);
	$res->execute(array( 'email' => $email ,':name' => $username));
	$result=$res->fetch();
	if(is_array($result) || is_object($result))
	{
		
	
	foreach($result as $rows)
	{
     return TRUE;
	}
	
	
	return FALSE;	
	}	
	
	}
	
	public function selectByEmailOrUserName($name,$pass) 
	{
		$s="SELECT * FROM user WHERE (email=? or userName=?) and password=? and removed =0";
		$res = $this->Conn->prepare($s); 
		$res->bindParam(1, $name);
		$res->bindParam(2, $name);
		$res->bindParam(3, $pass);
		$res->execute();
		$result = $res->fetchAll();
		$i=0;		
		foreach($result as $rows)
		{
			$u=new User($rows['userID']);
			$result[$i]=$u;
			$i++;
		}
		return $result;
	}
	
	

}





###################################  Test #######################################
$qObj = new QueryBuilder;

#$res=$qObj->isExist("sama.3amerr1@gmail.com" , "sama3amerr");
#echo var_dump($res);
#echo var_dump($qObj->selectAllProviderMenuItemss("cup cake"));
#echo var_dump($qObj->selectAllProviderOrders(1));

#---------------------  test service
/*
$sObj= new Service;
$sObj->setName("Dilevery");
$qObj->addService($sObj);
*/
#----------------------  test order
/*
$OObj = new Order(NULL); 

$OObj->setProviderID(2);
$OObj->setCustomerID(4);
$OObj->setItemID(33);

#$qObj->addOrder($OObj);
#$qObj->moveOrderToHistoryOrder(4);
#$qObj->cancelOrder(4);
#echo var_dump($qObj->selectAllProviderOrders(2));
#echo var_dump($qObj->selectAllCustomerOrders(2));
*/
#---------------------------------------------------------------------------  test special order

#$SOObj = new SpecialOrder(NULL); 

#$SOObj->setProviderID(1);
#$SOObj->setCustomerID(4);
#$SOObj->setOrderDescription("4  chicken please ");
#echo var_dump($SOObj);

#$qObj->addSpecialOrder($SOObj);
#$qObj->moveSpecialOrderToHistory(2);
#$qObj->cancelSpecialOrder(2);
#echo var_dump($qObj->selectAllProviderSpecialOrders(2));
#echo var_dump($qObj->selectAllCustomerSpecialOrders(4));
#------------------------------------------------------------------------------
/*
$ItemObl = new Item(NULL);
$ItemObl->setMealName("cup cake");
$ItemObl->setMealPrice(50);
$ItemObl->setItemCategory("dessert");
$ItemObl->setItemDescription(" test test");
$ItemObl->setMenuID(1);
*/
#$UpdItem = new Item(1);
#$qObj->addItem($ItemObl);
#$oo=$qObj->selectAllProviderMenuItems(1);
#echo var_dump($oo)
#$qObj->deleteItem(4);
#$qObj->updateItem($UpdItem);



?>