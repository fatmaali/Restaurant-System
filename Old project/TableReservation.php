<?php
//include_once "reservation.php";
include_once "connect.php";
echo 'DONE!!!';

class reservation{
public  $Date;
public  $Adult;
public  $Email;
public $Phone;
public $Comment;
public $Fromm;
public $Too;
public $ID;

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
	
	function get_Adult(){
		$this->Adult;
	}
	function set_Adult($Adult){
		$this->Adult=$Adult;
	}
	
	function get_Date(){
		$this->Date;
	}
	function set_Date($Date){
		$this->Date=$Date;
	}
	
public function updateresev($resobj,$Email){
	$sql="UPDATE `reservation` SET `Email`= '$this->Email',`Phone`= '$this->Phone' , `Adult`='$this->Adult', `Fromm`='$this->Fromm',`Too` ='$this->Too',`Date`='$this->Date', `Comment`='$this->Comment',`ID` = '$this->ID',`isdeleted` =0  WHERE `reservation`.`Email` ="."'$email'";
	echo($sql);
		mysql_query($sql);
	
}

}
class orderReservation extends reservation{
	public $Fromm;
	public $Too;
	public $ID;
	function set_Fromm($NewName)
	{
		$this->Fromm=$NewName;
	}
	function get_Fromm()
	{
		return $this->Fromm;
	}
	function set_Too($NewName)
	{
		$this->Too=$NewName;
	}
	function get_Too()
	{
		return $this->Too;
	}
	
	//Function to insert new data in reservation table DB
	static function Insert($newReserv)
	{

		$sql = "insert into reservation(Email,Phone,Adult,Fromm,Too,Date,Comment) values ('$newReserv->Email', '$newReserv->Phone','$newReserv->Adult','$newReserv->Fromm','$newReserv->Too','$newReserv->Date','$newReserv->Comment')";
	
		mysql_query($sql);
		echo 'Added@@';
	}
	
protected function gettotalhour(){
		
}
//Function to update reservation





}

?>