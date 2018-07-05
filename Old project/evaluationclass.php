<?php
include_once "connect.php";
class evaluation {
	
 //  	Excellent	Very Good	Good	Bad
public $FoodQuality ;			
public $TheMenu ;			
public $Dishes	;			
public $Service ;			
public $Tables ;				
public $WellCooked ;			
public $FoodIsServedImpeccably ;				
public $RestaurantAtmosphere ;				
public $PriceLevel ;			
public $Music ;
//food quality
function set_foodquality($NewQuality)
{
	$this->FoodQuality=$NewQuality;
}
function get_foodquality ()
{
	return $this->FoodQuality;
}
// menu
function set_themenu($Menu)
{
	$this->TheMenu=$Menu;
}
function get_themenu ()
{
	return $this->TheMenu;
}
// dishes 
	function set_dishes($NewDishes)
{
	$this->Dishes=$NewDishes;
}
function get_dishes ()
{
	return $this->Dishes;
}
// service
 function set_service($NewService)
{
	$this->Service=$NewService;
}
function get_service ()
{
	return $this->Service;
}
// Tables
 function set_tables($NewTable)
{
	$this->Tables=$NewTable;
}
function get_tables ()
{
	return $this->Tables;
}
// WellCooked
function set_wellcooked($WellCooking)
{
	$this->WellCooked=$WellCooking;
}
function get_wellcooked ()
{
	return $this->WellCooked;
}
//  FoodIsServedImpeccably
function set_foodisservedimpeccably($Food)
{
	$this->FoodIsServedImpeccably=$Food;
}
function get_foodisservedimpeccably ()
{
	return $this->FoodIsServedImpeccably;
}
// RestaurantAtmosphere
function set_restaurantatmosphere($Atmosphere)
{
	$this->RestaurantAtmosphere=$Atmosphere;
}
function get_restaurantatmosphere ()
{
	return $this->RestaurantAtmosphere;
}
// PriceLevel
function set_pricelevel($Level)
{
	$this->PriceLevel=$Level;
}
function get_pricelevel ()
{
	return $this->PriceLevel;
}
// Music
function set_Themusic($NewMusic)
{
	$this->Music=$NewMusic;
}
function get_Themusic ()
{
	return $this->Music;
}
static function StoreEvaluation($eval)
{
	$sql="INSERT INTO `evaluationtable` (`ID`, `FoodQuality`, `TheMenu`, `Dishes`, `Service`, `Tables`, `WellCooked`, `FoodIsServedImpeccably`, `RestaurantAtmosphere`, `PriceLevel`, `Music`) VALUES (NULL, '$eval->FoodQuality', '$eval->TheMenu', '$eval->Dishes', '$eval->Service', '$eval->Tables', '$eval->WellCooked', '$eval->FoodIsServedImpeccably', '$eval->RestaurantAtmosphere', '$eval->PriceLevel', '$eval->Music')";
	mysql_query($sql);

}	
		function __construct($id)
	
	{
		
		if ($id !="")
		{	
			
			$sql="select * from evaluationtable where 	ID=$id";
			
			$row = mysql_query($sql) or die(mysql_error());
			if ($evaluation = mysql_fetch_array($row))
			{
				$this->FoodQuality=$evaluation["FoodQuality"];
				$this->TheMenu=$evaluation["TheMenu"];
				$this->Dishes=$evaluation["Dishes"];
				$this->Service=$evaluation["Service"];
				$this->Tables=$evaluation["Tables"];
				$this->WellCooked=$evaluation["WellCooked"];
				$this->FoodIsServedImpeccably=$evaluation["FoodIsServedImpeccably"];
				$this->RestaurantAtmosphere=$evaluation["RestaurantAtmosphere"];
				$this->PriceLevel=$evaluation["PriceLevel"];
				$this->Music=$evaluation["Music"];

			}
		}
	}
}

?>