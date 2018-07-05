<?php
include_once "connect.php";
include_once "Typeclass.php";
class User
{   public $Fullname;
	public $Email;
	public $Username;
	public $Password;
	public $ID;
	public $UserType;
	
	function getusername($user)
	
	{
		$this->Username = $user;
	}
	
	function setusername()
	{
		return $this->Username;
	}
	
		function getpassword($pass)
	{
		$this->Password = $pass;
	}
	
	function setpassword()
	{
		return $this->Password;
	}
	
	function getfullname($name)
	{
		$this->Fullname = $name;
	}
	
	function setemail()
	{
		return $this->Fullname;
	}
	

	


	static function deleteuser($Users)
	{
		$sql = "delete from costumertable where Email=".$Users->Email;
		mysql_query($sql);
	}
	static function Insertuser($users)
	{

  		
		$sql="INSERT INTO costumertable (`Fullname`, `Username`, `Password`, `Email`) VALUES ('$users->Fullname', '$users->Username', '$users->Password' , '$users->Email' )";
		mysql_query($sql);
		//echo $sql;
	}
	function Update()
	{
	$sql="update costumertable set Fullname='".$this->Fullname."' , Username = '".$this->Username."' , Password='".$this->Password."', Email='".$this->Email."' Where  Email='".$this->Email."' ";
		mysql_query($sql);
	}
	static function SelectAll()
	{
		$sql="select * from costumertable order by Fullname";
		//mysql_query($sql);
		$costumerData = mysql_query($sql) or die(mysql_error());
		
		$i=0;
		$Result;
		while ($row = mysql_fetch_array($costumerData))
		{
			$MyObj= new User($row["ID"]);
			//$MyObj=new Use("");
			//$MyObj->ID=$row["ID"];
			//echo $MyObj->FullName. "<br>";
			$Result[$i]=$MyObj;
			//echo $Result[$i]->FullName;
			$i++;
		}
		return $Result;
		//echo $sql;
	}
	function __construct($id)
	
	{
		
		if ($id !="")
		{	
			
			$sql="select * from costumertable where ID=$id";
			//mysql_query($sql);
			$costumerset = mysql_query($sql) or die(mysql_error());
			if ($row = mysql_fetch_array($costumerset))
			{
				$this->ID=$row["ID"];
				$this->Fullname=$row["Fullname"];
				//echo $row['Fullname'];
				$this->Username =$row["Username"];
				$this->Password=$row["Password"];
				$this->Email=$row["Email"];
				$this->UserType=new UserType($row["UserType"]);
				
			}
		}
	}
	static function login($UserName,$Password)
	{
	$sql="SELECT * FROM costumertable WHERE Username='$UserName' and Password='$Password'";	
	echo $sql;
	$result=mysql_query($sql);
	if ($row=mysql_fetch_array($result))
		{
			return new User($row[0]); 		
		}
	return NULL;
	}
	
}

?>