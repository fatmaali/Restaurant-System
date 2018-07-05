<?php
	include "connect.php";
//connectToDatabase("phpmyadmin");
$sql="select * from menu order by ID";
		//mysql_query($sql);
		$StudentDataSet = mysql_query($sql) or die(mysql_error());
		$i=0;
		$Result;

echo "<form method='POST' action='result.php' onsubmit='return validateForm();'>";
			echo "<table style='left:227px;top:4px;width:485px;height:320px;z-index:1;' border='20'>";
		
		while ($lineArr= mysql_fetch_array($StudentDataSet))
		{    
		 //   echo $row["ID"];
		    echo "<tr>";
		    echo "<td>" .$lineArr[1]."</td> <td>".$lineArr[2]."<br>"."<select name='".$lineArr[4]."'><option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select>"."</td> <td>".$lineArr[3]."<br>"." <select name='".$lineArr[5]."'><option>0</oSSption><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option></select>"."</td >";
	echo "</tr>";
		
			$i++;
		}
		echo "<td>";
	echo "<br /><a href='orderform.html'></a>"	;
echo "</form>";	
	
?>
</table>
     
          
<div>
		


<a href ="orderform.html" ><input type="submit" id="Button1" name="order" value="order" style="position:absolute;left:597px;top:834px;width:96px;height:25px;z-index:0;"  </a>

     </div> 