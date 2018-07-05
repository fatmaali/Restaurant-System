<?php

include_once "connect.php";
//echo 'DONE!!!';

class resources{
public  $FoodName;
public  $Numbers;
public  $UserTypes;


function set_FoodName($newFoodName){
		
		$this->FoodName = $newFoodName;
		
	}
	function get_FoodName(){
		
		return $this->FoodName;
		
	}
	
	function set_Numbers($newNumbers){
		
		$this->Numbers = $newNumbers;
		
	}
	function get_Numbers(){
		
		return $this->Numbers;
		
	}
	function set_UserTypes($newUserTypes){
		
		$this->UserTypes = $newUserTypes;
		
	}
	function get_UserTypes(){
		
		return $this->UserTypes;
		
	}
	
	
	
	//Function to insert new data in Resources table DB
	static function Insert($newResource){

		$sql = "insert into resources(FoodName,Numbers,UserTypes) values ('$newResource->FoodName', '$newResource->Numbers','$newResource->UserTypes')";
	
		mysql_query($sql);
		echo 'Added@@';
	}
	}
	
?>
