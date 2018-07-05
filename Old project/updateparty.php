<?php
include "party.php";
$s=new party();
$em=$_POST["email"];
session_start();
if($_SESSION["UserID"]){
	
 if($s::search($em))
{
echo '<form method="post" action="actparty.php">';
echo '<table>';
echo '<tr>';
echo '<td> COSTUMER NAME:    <input type="text" name="costumer" value=""/> </td>';
echo '<td> EMAIL: </td>';
echo '<td>'.$em.'</td>';
echo "<input type='hidden' name='hidn' value='$em' />";
echo '</tr>';
echo '<tr>';
echo '<td> ARRIVAL DATE:    <input type="date" name="date" min ="2016-01-01" max="2020-01-01" value=""/> </td>';
echo '<td> PHONE:    <input type="number" name="Phone" value=""/> </td>';
echo '</tr>';

echo '<tr>';
echo '<td> NUMBER OF PEOPLE:    <input type="number" name="people" value="" min="1" max="60"/> </td>';
echo '<td> ADULTS:    <input type="number" name="adult" value="" min="1" max="60"/> CHILDREN:    <input type="number" name="children" value="" min="1" max="60"/> </td>';
echo '</tr>';
echo '</table></br>';
echo '<div>';
echo '<b>SEATING AREA: </b></br>';
echo '<input type="checkbox" name="Area1" value=""/>All Area <br>';
echo '<input type="checkbox" name="Area2" value=""/>Upstairs <br>';
echo '<input type="checkbox" name="Area3" value=""/>Outside Area <br>';

echo '<input type="checkbox" name="Area4" value=""/>Lounge <br>';
echo '</div> <br><br><br>';

echo '<table>'; 
echo '<tr rowspan="2"> <td> <b>BANQUEETTYPE: </b></td> <td><b> MEALTYPE:</b></td></tr>';
echo '<tr> <td allign="center"/><input type="radio" name="type1" value=""/> Rehearsal Dinner </td> <td allign ="center" /><input type="radio" name="meal1" value=""/> Lunch </td> </tr>';
echo '<tr> <td allign="center"/><input type="radio" name="type1" value=""/> Family Party </td> <td allign ="center" /><input type="radio" name="meal1" value=""/> Lunch To Go </td> </tr>';
echo '<tr> <td allign="center"/><input type="radio" name="type1" value=""/> Commandy Party </td> <td allign ="center" /><input type="radio" name="meal1" value=""/> Lunch F Style </td> </tr>';
echo '<tr> <td allign="center"/><input type="radio" name="type1" value=""/> Anniversary </td> <td allign ="center" /><input type="radio" name="meal1" value=""/> Breakfast </td> </tr>';
echo '<tr> <td allign="center"/><input type="radio" name="type1" value=""/> School Party </td> <td allign ="center" /><input type="radio" name="meal1" value=""/> Breakfast To Go </td> </tr>';
echo '<tr> <td allign="center"/><input type="radio" name="type1" value=""/> Birthday Party </td> <td allign ="center" /><input type="radio" name="meal1" value=""/> Dinner </td> </tr>';
echo '<tr> <td allign="center"/><input type="radio" name="type1" value=""/> Rehearsal Dinner </td> <td allign ="center" /><input type="radio" name="meal1" value=""/> Dinner To Go </td> </tr>';
echo '<tr> <td allign="center"/><input type="radio" name="type1" value=""/> Other</td> <td allign ="center" /><input type="radio" name="meal1" value=""/> Other </td> </tr>';
echo '</table><br><br><br>';
echo '<table>'; 
echo '<tr rowspan="2"> <td> <b>FAMILY STYLE: </b></td> <td></td></tr>';
echo '<tr> <td allign="center"/><input type="checkbox" name="style1" value=""/> Soup </td> <td allign ="center" /><input type="checkbox" name="style8" value=""/> Meatball</td> </tr>';
echo '<tr> <td allign="center"/><input type="checkbox" name="style2" value=""/> Salad </td> <td allign ="center" /><input type="checkbox" name="style9" value=""/> Beef Stew</td> </tr>';
echo '<tr> <td allign="center"/><input type="checkbox" name="style3" value=""/> Meat Paella </td> <td allign ="center" /><input type="checkbox" name="style10" value=""/> Ice Cream</td> </tr>';
echo '<tr> <td allign="center"/><input type="checkbox" name="style4" value=""/> Fish Paella </td> <td allign ="center" /><input type="checkbox" name="style11" value=""/> Bread & Butter</td> </tr>';
echo '<tr> <td allign="center"/><input type="checkbox" name="style5" value=""/> Daily Fish </td> <td allign ="center" /><input type="checkbox" name="style12" value=""/> Coffee,Tea</td> </tr>';
echo '<tr> <td allign="center"/><input type="checkbox" name="style6" value=""/> Veggies </td> <td allign ="center" /><input type="checkbox" name="style13" value=""/> Soda</td> </tr>';
echo '<tr> <td allign="center"/><input type="checkbox" name="style7" value=""/> Fries </td> <td allign ="center" /><input type="checkbox" name="style14" value=""/> Others</td> </tr>';


echo '</table><br><br><br>';


echo '<div>';
echo '<b> SPECIAL REQUEST </B></br>';
echo '<textarea name="TextArea1"  rows="4" cols="89">request</textarea></br> </br>';
echo 'EXT_AMOUNT  <input type="text" name ="amount" /> <br><br><br>';
echo '<input type="submit" id="Button1" name="" value="Submit" style="position:absolute;left:550px;">';
echo '</form>';
}else{
	echo "not found email";
}}else {
	header("location:dologin.php");
}?>