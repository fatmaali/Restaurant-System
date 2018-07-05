<table border="3">
  <tr>
            <td class="style1">
                ID</td>
            <td class="style1">
                Food Quality</td>
            <td class="style1">
                The Menu</td>
            <td class="style1">
                Dishes</td>
                <td class="style1">
              Service  </td>
             <td class="style1">
              Tables  </td>
                <td class="style1">
             WellCooked  </td>
              <td class="style1">
              FoodIsServedImpeccably  </td>
              <td class="style1">
              RestaurantAtmosphere </td>
              <td class="style1">
              PriceLevel</td>
              <td class="style1">
             Music </td>
        </tr>
<?php
session_start();
if(isset($_SESSION["UserID"]))
{
	

$host ='localhost';
$user = 'root';
$pass ='';
$name = 'project';
$conn = mysql_connect($host,$user,$pass);
if(!$conn)
{
	die("unable to create connection with database");
	echo "error";
}
mysql_select_db($name , $conn);

$query ="SELECT * FROM evaluationtable";
//$query = "INSERT INTO costumertable (`ID`, Fullname, `Username`, `Password`, `Email`) VALUES (NULL, 'Shimaa', 'shimoo', 'giggs', 'shimaa@yahoo.com')";
$result = mysql_query($query);
while($person = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>". $person['ID']  ."</td>";
	echo "<td>" .$person['FoodQuality']. "</td>";
	echo "<td>" .$person['TheMenu']. "</td>";
	echo "<td>" .$person['Dishes']. "</td>";
	echo "<td>" .$person['Service']. "</td>";
	echo "<td>" .$person['Tables']. "</td>";
	echo "<td>" .$person['WellCooked']. "</td>";
	echo "<td>" .$person['FoodIsServedImpeccably']. "</td>";
	echo "<td>" .$person['RestaurantAtmosphere']. "</td>";
	echo "<td>" .$person['PriceLevel']. "</td>";
	echo "<td>" .$person['Music']. "</td>";
	

	

}
}
else{
	header('location: Login.php');
}	

?>

</table>