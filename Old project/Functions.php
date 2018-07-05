<?php

include_once "connect.php";
echo 'DONE!!!';
class reservation{
	
	public $Email;
	public $Fromm;
	public $Too;
	public $Date;
	public $Adult;
	public $Phone;
	public $Comment;
	public $ID;
/*	
	function set_Email($newEmail){
		
		$this->Email = $newEmail;
		
	}
	function get_Email(){
		
		return $this->Email;
		
	}
	
	function set_Phone($newPhone){
		
		$this->Phone = $newPhone;
		
	}
	function get_Phone(){
		
		return $this->Phone;
		
	}
	
	function set_Comment($newComment){
		
		$this->Comment = $newComment;
		
	}
	function get_Comment(){
		
		return $this->Comment;
		
	}
*/
	
	//Function to insert new data in a new raw in reservation table DB
	static function Insert($newReserv)
	{

/*
$_POST["Email"],$_POST["from"],$_POST["To"],$_POST["day"],$_POST["adult"],$_POST["phone"],$_POST["TextArea1"] ))

private $Email;
	public $Fromm;
	public $Too;
	public $Date;
	public $Adult;
	private $Phone;
	private $Comment;
	public $ID;


*/
 
		$sql = "insert into reservation(Email,Phone,Adult,Fromm,Too,Date,Comment) values ('$newReserv->Email', '$newReserv->Phone','$newReserv->Adult','$newReserv->Fromm','$newReserv->Too','$newReserv->Date','$newReserv->Comment')";
		
/*		
$sql = "INSERT INTO `reservation` (`ID`, `Email`, `Phone`, `Adult`, `Fromm`, `Too`, `Date`, `Comment`) VALUES (\'6\', \'esjndasj@hotmail.com\', \'01153014006\', \'2\', \'10:28:30\', \'04:24:15\', \'2016-04-07\', \'qwwq\')";
*/		
		
		mysql_query($sql);
		echo 'Wael';
	}
	
	
	
	


/*
function __construct($id)
	
	{
		
		if ($id !="")
		{	
			
			$sql="select * from reservation where 	ID=$id";
			//mysql_query($sql);
			$StudentDataSet = mysql_query($sql) or die(mysql_error());
			if ($row = mysql_fetch_array($StudentDataSet))
			{
				$this->Email = $row["Email"];
				$this->Phone = $row["Phone"];
				$this->Adult = $row["Adult"];
				$this->Fromm = $row["Fromm"];
				$this->Too = $row["Too"];
				$this->Date = $row["Date"];
				$this->Comment = $row["Comment"];
				$this->ID = $row["ID"];
			}
		}
		
		}*/

}

?>