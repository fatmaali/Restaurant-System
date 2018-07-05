<?php
?>
<html>
<body>
<form name = "partyform" action="addparty.php" onsubmit="return validateForm()">
<table>
<tr>
<td> COSTUMER NAME:    <input type="text" name="costumer" value=""/> </td>
<td> EMAIL:    <input type="text" name="Email" value=""/> </td>
</tr>
<tr>
<td> ARRIVAL DATE:    <input type="date" name="date" min ="2010-01-01" max="2020-01-01" value=""/> </td>
<td> PHONE:    <input type="number" name="phone" value="" min="0"/> </td>
</tr>
<tr>
<td> NUMBER OF PEOPLE:    <input type="number" name="people" value="" min="1" max="60"/> </td>
<td> ADULTS:    <input type="number" name="adult" value="" min="1" max="60"/> CHILDREN:    <input type="number" name="children" value="" min="1" max="60"/> </td>
</tr>
</table></br>
<div>
<b>SEATING AREA: </b></br>
<input type="checkbox" name="Area1" value="All Area"/>All Area <br>
<input type="checkbox" name="Area2" value="Upstairs"/>Upstairs <br>
<input type="checkbox" name="Area3" value="Outside Area"/>Outside Area <br>
<input type="checkbox" name="Area4" value="Lounge"/>Lounge <br>
</div> <br><br><br>

<table> 
<tr rowspan="2"> <td> <b>BANQUEETTYPE: </b></td> <td><b> MEALTYPE:</b></td></tr>
<tr> <td allign="center"/><input type="radio" name="type1" value="Rehearsal Dinner"/> Rehearsal Dinner </td> <td allign ="center" /><input type="radio" name="meal1" value="Lunch"/> Lunch </td> </tr>
<tr> <td allign="center"/><input type="radio" name="type1" value="Family Party"/> Family Party </td> <td allign ="center" /><input type="radio" name="meal1" value="Lunch To Go"/> Lunch To Go </td> </tr>
<tr> <td allign="center"/><input type="radio" name="type1" value="Commandy Party"/> Commandy Party </td> <td allign ="center" /><input type="radio" name="meal1" value="Lunch F Style"/> Lunch F Style </td> </tr>
<tr> <td allign="center"/><input type="radio" name="type1" value="Anniversary"/> Anniversary </td> <td allign ="center" /><input type="radio" name="meal1" value="Breakfast"/> Breakfast </td> </tr>
<tr> <td allign="center"/><input type="radio" name="type1" value="School Party"/> School Party </td> <td allign ="center" /><input type="radio" name="meal1" value="Breakfast To Go"/> Breakfast To Go </td> </tr>
<tr> <td allign="center"/><input type="radio" name="type1" value="Birthday Party"/> Birthday Party </td> <td allign ="center" /><input type="radio" name="meal1" value="Dinner"/> Dinner </td> </tr>
<tr> <td allign="center"/><input type="radio" name="type1" value="Rehearsal Dinner"/> Rehearsal Dinner </td> <td allign ="center" /><input type="radio" name="meal1" value="Dinner To Go"/> Dinner To Go </td> </tr>
<tr> <td allign="center"/><input type="radio" name="type1" value="Other"/> Other</td> <td allign ="center" /><input type="radio" name="meal1" value="Other"/> Other </td> </tr>
</table><br><br><br>
<table> 
<tr rowspan="2"> <td> <b>FAMILY STYLE: </b></td> <td></td></tr>
<tr> <td allign="center"/><input type="checkbox" name="style1" value="Soup"/> Soup </td> <td allign ="center" /><input type="checkbox" name="style8" value="Meatball"/> Meatball</td> </tr>
<tr> <td allign="center"/><input type="checkbox" name="style2" value="Salad"/> Salad </td> <td allign ="center" /><input type="checkbox" name="style9" value="Beef Stew"/> Beef Stew</td> </tr>
<tr> <td allign="center"/><input type="checkbox" name="style3" value="Meat"/> Meat Paella </td> <td allign ="center" /><input type="checkbox" name="style10" value="Ice Cream"/> Ice Cream</td> </tr>
<tr> <td allign="center"/><input type="checkbox" name="style4" value="Fish Paella"/> Fish Paella </td> <td allign ="center" /><input type="checkbox" name="style11" value="Bread & Butter"/> Bread & Butter</td> </tr>
<tr> <td allign="center"/><input type="checkbox" name="style5" value="Daily Fish"/> Daily Fish </td> <td allign ="center" /><input type="checkbox" name="style12" value="Coffee,Tea"/> Coffee,Tea</td> </tr>
<tr> <td allign="center"/><input type="checkbox" name="style6" value="Vaggies"/> Veggies </td> <td allign ="center" /><input type="checkbox" name="style13" value="Soda"/> Soda</td> </tr>
<tr> <td allign="center"/><input type="checkbox" name="style7" value="Fries"/> Fries </td> <td allign ="center" /><input type="checkbox" name="style14" value="Others"/> Others</td> </tr>
</table><br><br><br>

<div>
<b> SPECIAL REQUEST </B></br>
<textarea name="TextArea1"  rows="4" cols="89">request</textarea></br> </br>
EXT_AMOUNT  <input type="text" name ="amount" /> <br><br><br>
<input type="submit" id="Button1" name="Submit" value="submit" style="position:absolute;left:550px;">
</form>
</body>
</html>

          
          

 



            
