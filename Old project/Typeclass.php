<?php
include_once "connect.php";
class UserType
{
	public $ID;
	public $UserTypeName;
	public $ArrayOfPages;
	function __construct($id)
	{
		if ($id !="")
		{	
			$sql="select * from usertype where ID=$id";
			
			$result=mysql_query($sql);
			if ($row = mysql_fetch_array($result))
			{
				$this->UserTypeName=$row["Role"];
				$this->ID=$row["ID"];
				$sql="select PageID from userpage where UserID=$this->ID";
				//echo $sql;
				$result=mysql_query($sql);
				$i=0;
				while($row1=mysql_fetch_array($result))
				{
					$this->ArrayOfPages[$i]=new pages($row1[0]);
					$i++;
				}
				
			}
				
		}
	}
}
class pages
{
	public $ID;
	public $FreindlyName;
	public $Linkaddress;
	public $HTML;
	
	function __construct($id)
	{
		if ($id !="")
		{	
			$sql="select * from page where ID=$id";
			//echo $sql;
			$result2=mysql_query($sql) ;
			if ($row2 = mysql_fetch_array($result2))
			{
				$this->FreindlyName=$row2["FriendlyNames"];
				$this->Linkaddress=$row2["Links"];
				$this->HTML=$row2["HTML"];
				$this->ID=$row2["ID"];
			}
				
		}
	}
	
}
//$UserTypeObj=new UserType(45646546846546546584848647);
?>