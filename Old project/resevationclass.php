<?php
//include_once "reservation.php";
include_once "connect.php";
//echo 'DONE!!!';

class reservation{
public  $Date;
public  $Adult;
public  $Email;
public $Phone;
public $Comment;
public $ID;
public $userID;
function set_date($newEmail){
		
		$this->Date = $newEmail;
		
	}
	function get_date(){
		
		return $this->date;
		
	}
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
	{$sql = "insert into reservation(ID,Email,Phone,Adult,Fromm,Too,Date,Comment) values (null,'$newReserv->Email', '$newReserv->Phone','$newReserv->Adult','$newReserv->Fromm','$newReserv->Too','$newReserv->Date','$newReserv->Comment')";
	
		mysql_query($sql);
	//	echo 'Added@@';
	}
public function updateresev($resobj,$email){
	$sql="UPDATE `reservation` SET `Email`= '$this->Email',`Phone`= '$this->Phone' , `Adult`='$this->Adult', `Fromm`='$this->Fromm',`Too` ='$this->Too',`Date`='$this->Date', `Comment`='$this->Comment',`userID` = '$this->userID',`isdeleted` =0  WHERE `reservation`.`Email` ="."'$email'";
	echo($sql);
		mysql_query($sql);
	
}
	public function deleteresev($resobj,$email){
	$sql="UPDATE `reservation` SET `Email`= '$this->Email',`Phone`= '$this->Phone' , `Adult`='$this->Adult', `Fromm`='$this->Fromm',`Too` ='$this->Too',`Date`='$this->Date', `Comment`='$this->Comment',`userID` = '$this->userID',`isdeleted` ='1' WHERE `reservation`.`Email` ="."'$email'";
	echo($sql);
		mysql_query($sql);
	
}
public function search($email){
		$search=0;
   $query ="SELECT * FROM `reservation`";
   $result = mysql_query($query);
//echo $result;
	$i=0;
    $row[0] = "";
    if($result === FALSE) { 
  trigger_error('Query failed returning error: '. mysql_error(),E_USER_ERROR);
}
while($person = mysql_fetch_array($result))
{
	if($person['Email']==$email)
	{
		$row[$i] = $person['Email'];
		//echo $row[$i];
		$search=$search+1;
		return($person);
		//return $row;
		
	}

}}
public function searchIsdeletedrr()
{      
$arrayofarray;
			$search=0;
   $query ="SELECT * FROM `reservation`";
   $result = mysql_query($query);
//echo $result;
	$i=0;
    $row[0] = "";
    $z=0;
    $e=0;
    if($result === FALSE) { 
  trigger_error('Query failed returning error: '. mysql_error(),E_USER_ERROR);
}
while($person = mysql_fetch_array($result))
{
	if($person['isdeleted']==1)
	{
		$row[$i] = $person['isdeleted'];
		//echo $row[$i];
		$search=$search+1;
		$arrayofarray[$z][$e]=array($person);
		//echo $row[$i];
		$z++;
		$e++;
	//print_r($arrayofarray);
		continue;
		
		//return $row;
		
	}}return($arrayofarray);
}
public function listALL(){
	$query ="SELECT * FROM reservation";
//$query = "INSERT INTO costumertable (`ID`, Fullname, `Username`, `Password`, `Email`) VALUES (NULL, 'Shimaa', 'shimoo', 'giggs', 'shimaa@yahoo.com')";
$result = mysql_query($query);
while($person = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>". $person['ID']  ."</td>";
	echo "<td>" .$person['Email']. "</td>";
	echo "<td>" .$person['Phone']. "</td>";
	echo "<td>" .$person['Adult']. "</td>";
	echo "<td>" .$person['Fromm']. "</td>";
	echo "<td>" .$person['Too']. "</td>";
	echo "<td>" .$person['Date']. "</td>";
	echo "<td>" .$person['Comment']. "</td>";

	

}

}
protected function gettotalhour(){
		
}
//Function to update reservation


}

class party extends reservation{
	//public  $Date;
   public  $numofpeople;
  //private  $Email;
  //public $phone;
 // public $Comment;
	private $name;
	public $childernnum;
	private $adultsnum;
	private $mealtype;
	private $banquetype;
	public $famstyle1;
	public $famstyle2;
	public $famstyle3;
	public $famstyle4;
	public $famstyle5;
	public $famstyle6;
	public $famstyle7;
	public $famstyle8;
	public $famstyle9;
	public $famstyle10;
	public $seterea1;
	public $seterea2;
	public $seterea3;
	public $seterea4;
	private $extamount;
//	public $userID;
	/*function set_Email($newEmail){
		
		$this->Email = $newEmail;
		
	}
	function get_Email(){
		
		return $this->Email;
		
	}
	
/*	function set_Phone($newPhone){
		
		$this->phone = $newPhone;
		
	}
	function get_Phone(){
		
		return $this->phone;
		
	}
	function set_Comment($newComment){
		
		$this->Comment = $newComment;
		
	}
	function get_Comment(){
		
		return $this->Comment;
		
	}
	*/
	/*function get_numofpeople(){
		$this->numofpeople;
	}
	function set_numofpeople($numofpeople){
		$this->numofpeople=$numofpeople;
	}*/
function set_name($NewName)
	{
		//if (count($NewName)>5)
		$this->name=$NewName;
	}
	function get_name()
	{
		return $this->name;
	}
	function set_childnum($NewNum)
	{

		$this->childernnum=$NewNum;
	}
	function get_childnum()
	{
		return $this->childernnum;
	}
	function set_adultnum($NewNum)
	{
		//if (count($NewName)>5)
		$this->adultsnum=$NewNum;
	}
	function get_adultnum()
	{
		return $this->adultsnum;
	}
	function set_mealtype($Newmeal)
	{
		//if (count($NewName)>5)
		$this->mealtype=$Newmeal;
	}
	function get_mealtype()
	{
		return $this->mealtype;
	}
	function set_bnqtype($NewName)
	{
		//if (count($NewName)>5)
		$this->banquetype=$NewName;
	}
	function get_bnqtype()
	{
		return $this->banquetype;
	}
	function set_ext($ext)
	{
		//if (count($NewName)>5)
		$this->extamount=$ext;
	}
	function get_ext()
	{
		return $this->extamount;
	}
	public function store_party($patry){
		
		/*$sql="INSERT INTO menu(ID,Primarycostumer,Email,date,phone,people,adult,children,Area1,Area2,Area3,Area4,type1,meal1,style1,style2,style3,style4,style5,style6,style7,style8,style9,style10,style11,style12,style13,style14,TextArea1,amount)
		VALUES (NULL,'$patry->name','$patry->childernnum','$patry->adultsnum','$patry->mealtype','$patry->banquetype','$patry->famstyle1','$patry->famstyle2','$patry->famstyle3','$patry->famstyle4','$patry->famstyle5','$patry->famstyle6','$patry->famstyle7','$patry->famstyle8','$patry->famstyle9','$patry->famstyle10','$patry->seterea1','$patry->seterea2','$patry->seterea3','$patry->seterea4','$patry->extamount')";
   echo $sql;*/
  $sql="INSERT INTO `party reservation` (`ID`, `costumer`, `Email`, `date`, `phone`, `people`, `adult`, `children`, `Area1`, `Area2`, `Area3`, `Area4`, `type1`, `meal1`, `style1`, `style2`, `style3`, `style4`, `style5`, `style6`, `style7`, `style8`, `style9`, `style10`, `TextArea1`, `amount`,`UserID`,`isdeleted`) VALUES (NULL,'$patry->name','$patry->Email','$patry->Date','$patry->phone','$patry->numofpeople','$patry->adultsnum','$patry->childernnum','$patry->seterea1','$patry->seterea2','$patry->seterea3','$patry->seterea4','$patry->mealtype','$patry->banquetype','$patry->famstyle1','$patry->famstyle2','$patry->famstyle3','$patry->famstyle4','$patry->famstyle5','$patry->famstyle6','$patry->famstyle7','$patry->famstyle8','$patry->famstyle9','$patry->famstyle10','$patry->Comment','$patry->extamount','$patry->userID','0')";
 echo $sql; 
 mysql_query($sql);
 
 
 
	}
/*public function deleteparty($Objmenu){

	$sql="DELETE FROM `party reservation` WHERE `party reservation`.`Email`="."'$Objmenu'";
	echo $sql;
		mysql_query($sql);
}*/
public function updateparty($patry,$email){
	$sql="UPDATE `party reservation` SET `costumer` ='$patry->name', `Email` = '$patry->Email', `date` = '$patry->Date', `phone` = '$patry->phone',`people` = '$patry->numofpeople', `adult` = '$patry->adultsnum', `children` = '$patry->childernnum',`Area1` = '$patry->seterea1',`Area2` = '$patry->seterea2', `Area3` = '$patry->seterea3', `Area4` = '$patry->seterea4', `meal1` = '$patry->mealtype',`type1` ='$patry->banquetype',`style1` = '$patry->famstyle1', `style2` = '$patry->famstyle2',`style3` = '$patry->famstyle3',`style4` = '$patry->famstyle4', `style5` = '$patry->famstyle5', `style6` = '$patry->famstyle6', `style7` = '$patry->famstyle7', `style8` = '$patry->famstyle8', `style9` = '$patry->famstyle9', `style10` = '$patry->famstyle10', `TextArea1` = '$patry->Comment', `amount` = '$patry->extamount',`isdeleted`='0' WHERE `party reservation`.`Email` ="."'$email'";
//echo $sql;
mysql_query($sql);	
}
public function search($email){
		$search=0;
   $query ="SELECT * FROM `party reservation`";
   $result = mysql_query($query);
//echo $result;
	$i=0;
    $row[0] = "";
    if($result === FALSE) { 
  trigger_error('Query failed returning error: '. mysql_error(),E_USER_ERROR);
}
while($person = mysql_fetch_array($result))
{
	if($person['date']==$email)
	{
		$row[$i] = $person['date'];
		//echo $row[$i];
		$search=$search+1;
		return($person);
		//return $row;
		
	}

}}
public function searchIsdeleted()
{      
$arrayofarray ="";
			$search=0;
   $query ="SELECT * FROM `party reservation`";
   $result = mysql_query($query);
//echo $result;
	$i=0;
    $row[0] = "";
    $z=0;
    $e=0;
    if($result === FALSE) { 
  trigger_error('Query failed returning error: '. mysql_error(),E_USER_ERROR);
}
while($person = mysql_fetch_array($result))
{
	if($person['isdeleted']==1)
	{
		$row[$i] = $person['isdeleted'];
		//echo $row[$i];
		$search=$search+1;
		$arrayofarray[$z][$e]=array($person);
		//echo $row[$i];
		$z++;
		$e++;
	//print_r($arrayofarray);
		continue;
		
		//return $row;
		
	}}
	
return($arrayofarray);
}

/*
if($search>0){
return TRUE;	
}else{
	
return false;
}*/

public function nearest($date1,$option)
{
$sql = "SELECT `Date`  FROM `party reservation` WHERE date >= CURDATE() ORDER BY date ASC";
$query="SELECT CURRENT_DATE()";
$result = mysql_query($query);
$person = mysql_fetch_array($result);
$orderdate1 = explode('-', $person[0]);
$cyear = $orderdate1[0];
$cmonth   = $orderdate1[1];
$cday  = $orderdate1[2];

$search =0;


$date = explode('-', $date1);
$year = $date[0];
$month= $date[1];
$day  = $date[2];
if($year >= $cyear)
{
	if($month >= $cmonth || $year >= $cyear )
	{
		if($day >= $cday || $month >= $cmonth || $year >= $cyear)
		{
			$result1 = mysql_query($sql);
			$i=0;
			$record =$date1;
			$search =0;
			while($person1 = mysql_fetch_array($result1))
				{
					//echo $person1[0];
					$array[$i] = $person1[0];
					
					
					//echo $array[$i];
					if($record == $array[$i])
					{
						$search++;					
						$orderdate = explode('-', $person1[0]);
						$year1 = $orderdate[0];
						$month1   = $orderdate[1];
						$day1  = $orderdate[2];
							$day1=$day1+$option;
						if ($day1 > 30)
						{
								$day1=$day1%30;
						
							$month1=$month+1;
						}
					
						
						
						$record ="$year1-$month1-$day1";
					
						
						 
					}
					//echo $array[$i] ."<br>";
					
					$i++;

				}
				//echo $record;
				//echo $search;
		}
	}
}	
return $record;
	}
	static function delete_party($patry,$email){
$sql="UPDATE `party reservation` SET `costumer` ='$patry->name', `Email` = '$patry->Email', `date` = '$patry->Date', `phone` = '$patry->phone',`people` = '$patry->numofpeople', `adult` = '$patry->adultsnum', `children` = '$patry->childernnum',`Area1` = '$patry->seterea1',`Area2` = '$patry->seterea2', `Area3` = '$patry->seterea3', `Area4` = '$patry->seterea4', `meal1` = '$patry->mealtype',`type1` ='$patry->banquetype',`style1` = '$patry->famstyle1', `style2` = '$patry->famstyle2',`style3` = '$patry->famstyle3',`style4` = '$patry->famstyle4', `style5` = '$patry->famstyle5', `style6` = '$patry->famstyle6', `style7` = '$patry->famstyle7', `style8` = '$patry->famstyle8', `style9` = '$patry->famstyle9', `style10` = '$patry->famstyle10', `TextArea1` = '$patry->Comment', `amount` = '$patry->extamount',`isdeleted`='1' WHERE `party reservation`.`Email` ="."'$email'";
//echo $sql;
mysql_query($sql);
}
	
}
$q=new orderReservation();
//$q->Email="fatmal@gmail.com";
//print_r($q->searchIsdeletedrr());
$s=new party();
/*if($s->search("fatma.alq@yahoo.com")){
	
}else{*/
/*
$s->set_adultnum(2);
$s->Date=3333;
$s->set_bnqtype("dinner");
$s->set_Email("fatma.alq@yahoo.com");
$s->set_mealtype("dineer");
$s->Comment="qq";
$s->phone=012567899;
$s->numofpeople=7;
$s->set_childnum(6);
$s->set_ext(4);
$s->set_name("fatma");
$s->famstyle1="updatii";
$s->famstyle2="";
$s->famstyle4="";
$s->famstyle3="";
$s->famstyle5="";
$s->famstyle6="";
$s->famstyle7="";
$s->famstyle10="";
$s->famstyle9="";
$s->famstyle8="";
$s->seterea1="outside";
$s->seterea2="";
$s->seterea3="";
$s->seterea4="";
$s->store_party($s);*/
/*if($s->search("fatma.ali@yahoo.com")){
	echo "found";
$arr=$s->search("fatma.ali@yahoo.com");
	echo ($arr[3]);
}else{
	echo "weee1";
	echo $s->childernnum;
}
*//*
$q=$s->search("fatma.alq@yahoo.com");
echo $q[24];
$s->set_name($q[1]);
$s->Date=$q[3];
$s->set_bnqtype($q[12]);
$s->set_Email($q[2]);
$s->set_mealtype($q[13]);
$s->Comment=$q[24];
$s->phone=$q[4];
$s->numofpeople=$q[5];
$s->set_childnum($q[7]);
$s->set_ext($q[25]);
$s->set_name($q[1]);
$s->famstyle1=$q[14];
$s->famstyle2=$q[15];
$s->famstyle4=$q[16];
$s->famstyle3=$q[17];
$s->famstyle5=$q[18];
$s->famstyle6=$q[19];
$s->famstyle7=$q[20];
$s->famstyle10=$q[21];
$s->famstyle9=$q[22];
$s->famstyle8=$q[23];
$s->seterea1=$q[8];
$s->seterea2=$q[9];
$s->seterea3=$q[10];
$s->seterea4=$q[11];*/
//print_r($s->searchIsdeleted());
/*
$s=new orderReservation();
$s->Email="ahmadshehii@gmail.com";
$s->Phone=9247429;
$s->Adult=22;
$s->Fromm=12;
$s->Too=23;
$s->Date=23-4-43;
$s->Comment="  ";
$s->updateresev($s,"ahmadshehii@gmail.com");
//$s->Insert($s);*/
?>