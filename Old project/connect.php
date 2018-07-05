<table border="2">
<?php
$host ='localhost';
$user = 'root';
$pass ='';
$name = 'rosto';
$conn = mysqli_connect($host,$user,$pass);
if(!$conn)
{
	die("unable to create connection with database");
	echo "error";
}
mysqli_select_db($name , $conn);

/*$query ="SELECT * FROM costumertable";
//$query = "INSERT INTO costumertable (`ID`, Fullname, `Username`, `Password`, `Email`) VALUES (NULL, 'Shimaa', 'shimoo', 'giggs', 'shimaa@yahoo.com')";
$result = mysql_query($query);
while($person = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>". $person['ID']  ."</td>";
	echo "<td>" .$person['Fullname']. "</td>";
	echo "<td>" .$person['Username']. "</td>";
	echo "<td>" .$person['Password']. "</td>";
	echo "<td>" .$person['Email']. "</td>";
	echo "</tr>";
}
	*/

?>
</table>