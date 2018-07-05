 <?php
include "connect.php";
include "getlastid.php";
//connecttodatabase("rosto");
class menu{
private  $foodName;
private  $smallPrice;
private  $bigPrice;
public $comboSmallnum;
public $combolargenum;
public $id;
	function __construct($id){
		if ($id !="")
		{	
			
			$sql="select * from menu where 	ID=$id";
			//mysql_query($sql);
			$StudentDataSet = mysql_query($sql) or die(mysql_error());
			if ($row = mysql_fetch_array($StudentDataSet))
			{
				$this->foodName=$row["foodName"];
				$this->smallPrice=$row["smallPrice"];
				$this->bigPrice=$row["bigPrice"];
				$this->comboSmallnum=$row["comboSmallnum"];
				$this->comboLargenum=$row["comboLargenum"];
				$this->id=$row["id"];
			}
		}
	}
function set_foodname($NewName)
	{
	
		$this->foodName=$NewName;
	}
function get_foodname()
	{
		return $this->foodName;
	}
function set_smallPrice($price)
	{
	
		$this->smallPrice=$price;
	}
function get_smallprice()
	{
		
	
		return $this->smallPrice;
	}
	
	function set_bigprice($price)
	{
		//if (count($NewName)>5)
		$this->bigPrice=$price;
	}
	function get_bigprice()
	{
		return $this->bigPrice;
	}
	
public function store_food($foodname,$small,$big){
	$combonum=getlatid()+1;
	$comboSmall="combosmall".$combonum;
	$comboLarge="combolarge".$combonum;
	$sql="INSERT INTO menu(ID,foodName,smallPrice,bigPrice,comboSmallnum,comboLargenum) VALUES (NULL,$foodname,$small,$big,'$comboSmall','$comboLarge'";
echo $sql;
mysql_query($sql);
}	
public function updatefood($Objmenu){
	
	$sq="UPDATE `menu` SET `foodName` = '".$this->foodName."', `smallPrice` = '".$this->smallPrice."',`bigPrice` = '".$this->bigPrice."',`comboSmallnum` = '".$this->comboSmallnum."', `comboLargenum` = '".$this->combolargenum."' WHERE `menu`.`id` ='".$this->id."'";
		
		
		/*$sql="update menu set foodName='".$this->foodName."' , smallPrice='".$this->Email."' , Password='$this->Password', DOB='$this->DOB' where ID=".$this->ID."";*/
		mysql_query($sq);
}
static function deletefood($Objmenu){
		$sql="DELETE FROM `menu` WHERE `menu`.`id` =".$Objmenu->id;
		mysql_query($sql);
	
}
}
$combonum=getlatid()+1;
	$comboSmall="combosmall".$combonum;
	$comboLarge="combolarge".$combonum;
$s=new menu(25);
$s->set_foodname("crep");
$s->set_smallPrice(22);
$s->set_bigprice(33);
$s->comboSmallnum=$comboSmall;
$s->combolargenum=$comboLarge;
$s->updatefood($s);
echo $s->combolargenum;
menu::deletefood($s);
?>