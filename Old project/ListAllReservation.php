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
	

?>

</table>