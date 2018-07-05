<?php


#require_once 'DBConnection.php';
require_once 'QueryBuilder.php';

class User
{
   private $userID;
   private $userType;
   private $fName;
   private $lName;
   private $userName;
   private $email;
   private $mobile;
   private $password;
   private $gender;  
   private $gov;
   private $removed; 
   private $totalRate;  
  # private $DBConn= new Connection;  // connection to DB object
   #private $QueryObj= new QueryBuilder;
   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   function __construct ($id)
	{
		if ($id !="")
	   {	
		$DBConn=new Connection;
		$sql="select * from user where userID=$id";
		$res= $DBConn->Conn->query($sql);
		foreach($res as $rows)
		{
		   $this->userID=$rows['userID'];
		   $this->userType= $rows['userType'];
		   $this->fName= $rows['fname'];
		   $this->lName= $rows['lname'];
		   $this->userName=$rows['userName'];
		   $this->email=$rows['email'];
		   $this->mobile=$rows['mobile'];
		   $this->password=$rows['password'];
		   $this->gender=$rows['gender'];
		   $this->gov=$rows['gov'];
		   $this->removed=$rows['removed'];
		   $this->totalRate=$rows['TotalRate'];
		}
	  }	
	}
  /////////////////////////////////////////////////////////setters///////////////////////////////////////////////////////
  public function setUserID($ID)
  {
    $this->userID=$ID;
  }
  public function setUserType($Type)
  {
    $this->userType=$Type;
  }
  public function setUserFname($FName)
  {
    $this->fName=$FName;
  }
  public function setUserLname($LName)
  {
    $this->lName=$LName;
  }
  public function setUserName($UserName)
  {
    $this->userName=$UserName;
  }
  public function setUserEmail($Email)
  {
    $this->email=$Email;
  }
  public function setUserMobile($Mobile)
  {
    $this->mobile=$Mobile;
  }
  public function setUserPassword($Password)
  {
    $this->password=$Password;
  }
  public function setUserGender($Gender)
  {
    $this->gender=$Gender;
  }
  public function setGov($G)
  {
	$this->gov=$G;
  }
  public function setUserRemoved($R)
  {
    $this->removed=$R;
  }
  public function setUserRate($R)
  {
    $this->totalRate=$R;
  }
  ///////////////////////////////////////////////////////////getters///////////////////////////////////////////////////////////////
  function getUserID()
  {
    return $this->userID;
  }
  function getUserType()
  {
    return $this->userType;
  }
  function getUserFname()
  {
    return $this->fName;
  }
  function getUserLname()
  {
    return $this->lName;
  }
  function getUserName()
  {
    return $this->userName;
  }
  function getUserEmail()
  {
    return $this->email;
  }
  function getUserMobile()
  {
    return $this->mobile;
  }
  function getUserPassword()
  {
    return $this->password;
  }
  function getUserGender()
  {
    return $this->gender;
  }
  function getGov()
  {
	return $this->gov;
  }
  function getUserRemoved()
  {
    return $this->removed;
  }
  function getUserRate()
  {
    return $this->totalRate;
  }







static function signup($UserObject)
{   $QueryObj=new QueryBuilder;
	$Email=$UserObject->getUserEmail();
	$Username=$UserObject->getUserName();
	$flag = QueryBuilder::isExist($Email , $Username);
			if($flag != TRUE)
			{
				$QueryObj->addUser($UserObject);
				if($UserObject->getUserType() == "provider")
		          {   $ProviderObj= new Provider(NULL);
				      $ProviderObj->setProviderID($UserObject->getUserID());
			      }   
				return TRUE;
				
			}				
  return FALSE;		 
}    


static function login($UserObject)
	{  
		$QueryObj= new QueryBuilder;
		$DBConn= new Connection;
		$Email=$UserObject->getUserEmail();
		$pasword=$UserObject->getUserPassword();
		$res=$QueryObj->selectByEmailOrUserName($Email,$pasword);
		if(empty($res))
		{
			//echo "Invalid email or password";
			return $res;
		}
			//echo "logedin";
			return $res;
	}

}






?>