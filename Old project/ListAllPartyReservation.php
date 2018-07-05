<table border="3">
  <tr>
            <td class="style1">
                 ID</td>
            <td class="style1">
                Email</td>
            <td class="style1">
                Phone</td>
            <td class="style1">
                Adult</td>
                <td class="style1">
                From</td>
            <td class="style1">
                To</td>
            <td class="style1">
                Date</td>    
            <td class="style1">
                Comment</td>             
                

                
        </tr>
<?php
$host ='localhost';
$user = 'root';
$pass ='';
$name = 'rosto';
$conn = mysql_connect($host,$user,$pass);
if(!$conn)
{
	die("unable to create connection with database");
	echo "error";
}
mysql_select_db($name , $conn);

$query ="SELECT * FROM `party reservation`";

$result = mysql_query($query);
while($person = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $person['ID']."</td>";
	echo "<td>" . $person['costumer']."</td>";
	echo "<td>" . $person['Email']."</td>";
	echo "<td>" . $person['date']."</td>";
	echo "<td>" . $person['phone']."</td>";
	echo "<td>" . $person['people']."</td>";
	echo "<td>" . $person['adult']."</td>";
	echo "<td>" . $person['children']. "</td>";
	echo "<td>" . $person['Area1']  ."</td>";
	echo "<td>" . $person['Area2']  ."</td>";
	echo "<td>" . $person['Area3']  ."</td>";
	echo "<td>" . $person['Area4']  ."</td>";
	echo "<td>" . $person['type1']  ."</td>";
	echo "<td>" . $person['meal1']  ."</td>";
	echo "<td>" . $person['style1'] ."</td>";
	echo "<td>" . $person['style2'] ."</td>";
	echo "<td>" . $person['style3'] ."</td>";
	echo "<td>" . $person['style4'] ."</td>";
    echo "<td>" . $person['style5'] ."</td>";	
    echo "<td>" . $person['style6'] ."</td>";  
    echo "<td>" . $person['style7'] ."</td>";
    echo "<td>" . $person['style8'] ."</td>"; 
    echo "<td>" . $person['style9'] ."</td>";
    echo "<td>" . $person['style10'] ."</td>";
    echo "<td>" . $person['TextArea1']  ."</td>";
    echo "<td>" . $person['amount']  ."</td>";
	

}
	

?>

</table>