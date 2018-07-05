<?php
include "connect.php";

class party {
	public  $Date;
   public  $numofpeople;
  private  $Email;
  public $phone;
  public $Comment;
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
	public $userID;
	function set_Email($newEmail){
		
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
		
	}*/
	function set_Comment($newComment){
		
		$this->Comment = $newComment;
		
	}
	function get_Comment(){
		
		return $this->Comment;
		
	}
	
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
  $sql="INSERT INTO `party reservation` (`ID`, `costumer`, `Email`, `date`, `phone`, `people`, `adult`, `children`, `Area1`, `Area2`, `Area3`, `Area4`, `type1`, `meal1`, `style1`, `style2`, `style3`, `style4`, `style5`, `style6`, `style7`, `style8`, `style9`, `style10`, `TextArea1`, `amount`,`UserID`,`isdeleted`) VALUES (NULL,'$patry->name','$patry->Email','$party->Date','$party->phone','$party->numofpeople','$patry->adultsnum','$patry->childernnum','$patry->seterea1','$patry->seterea2','$patry->seterea3','$patry->seterea4','$patry->mealtype','$patry->banquetype','$patry->famstyle1','$patry->famstyle2','$patry->famstyle3','$patry->famstyle4','$patry->famstyle5','$patry->famstyle6','$patry->famstyle7','$patry->famstyle8','$patry->famstyle9','$patry->famstyle10','$patry->Comment','$patry->extamount','$patry->userID','0')";
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
echo $sql;
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
$arrayofarray;
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



protected function getnearestspot(){
		
	}
	static function delete_party($patry,$email){
	
	$sql="UPDATE `party reservation` SET `costumer` ='$patry->name', `Email` = '$patry->Email', `date` = '$patry->Date', `phone` = '$patry->phone',`people` = '$patry->numofpeople', `adult` = '$patry->adultsnum', `children` = '$patry->childernnum',`Area1` = '$patry->seterea1',`Area2` = '$patry->seterea2', `Area3` = '$patry->seterea3', `Area4` = '$patry->seterea4', `meal1` = '$patry->mealtype',`type1` ='$patry->banquetype',`style1` = '$patry->famstyle1', `style2` = '$patry->famstyle2',`style3` = '$patry->famstyle3',`style4` = '$patry->famstyle4', `style5` = '$patry->famstyle5', `style6` = '$patry->famstyle6', `style7` = '$patry->famstyle7', `style8` = '$patry->famstyle8', `style9` = '$patry->famstyle9', `style10` = '$patry->famstyle10', `TextArea1` = '$patry->Comment', `amount` = '$patry->extamount',`isdeleted`='1' WHERE `party reservation`.`Email` ="."'$email'";
echo $sql;
mysql_query($sql);
}
	
}

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
?>