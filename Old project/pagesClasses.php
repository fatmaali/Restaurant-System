<?php
include_once "connect.php";
echo 'HIIIII';
class MenuDesign 
{
		public $ID;
		public $Action;
		static function SelectAll()
	{echo'hii';
		$sql="select * from pages ";echo'Hiii';
		$v = mysql_query($sql) or die(mysql_error());
		$i=0;
		$Result;
		//echo $result;
		while ($row = mysql_fetch_array($v))
		{
			//$this->Action=$row["Action"];
			$MyObj= new MenuDesign();
			$Result[$i]=$MyObj;
			$i++;
			echo'HIIIII';
		}
		echo 'HIIII';
		return $Result;
		
	}
	}
	
	function __construct($id)
	
	{
		if ($id !="")
		{	
			$sql="select * from pages where 	ID=$id";
			
			$v = mysql_query($sql) or die(mysql_error());
			if ($row = mysql_fetch_array($v))
			{
				$this->Action=$row["Action"];
				$this->ID=$row["ID"];
			}
		}
	


}

?>