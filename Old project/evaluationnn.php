<?php
//echo ;
include_once "evaluationclass.php";
if (isset($_REQUEST["ID"]))
{
$MyObj=new evaluation($_REQUEST["ID"]);

	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rosto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />

<script>
function validateForm() {
    var x = document.forms["loginform"]["Username"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
	 var p= document.forms.loginform.Password.value;
if(p.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }
}
</script>
</head>
<body>
<div id="container_wrapper_outter">
  <div id="container_wrapper_inner">
    <div id="container">
      <div id="menu">
        <ul>
          <li><a href="Home.html" class="current">Home</a></li>
          <li><a href="Gallery.html">Gallery</a></li>
          <li><a href="Diraction.html" class="margin_r_330">Direction</a></li>
          <li><a href="reservationOut.php">Reservation</a></a></li>
          <li><a href="Menu.html">Menu</a></a></li>
          <li><a href="evaluationnn.php">Evaluation</a></li>
        </ul>
        <div id="site_title">
          <h1> <a href="Home.html">Rosto <span><p dir="rtl" lang="ar">  </p>  </p> </span></a> </h1>
        </div>
      </div>
      <!-- end of menu -->
      <div id="banner">
        <div id="banner_section">
          <h2>Our Goals</h2>
          <p>We introduce what suits the Egyptian taste and integrate between different cultures, by merging different Oriental and western recipes to make new dishes that are a fusion of the Eastern and the Western tastes with the overwhelming Egyptian touch..</p>
        </div>
        <!-- banner section -->
      </div>
      <!-- end of banner -->
      <div id="content_wrapper" >
        <div id="content">
          <div id="main_column">
          
          
          <H1>Evaluation</H1> 
            <br /> <br /> <br /> <br />
          
          <div id="wb_Login1">
          
          


<form name ="evaluationform" action="StoreEvaluation.php">

<table>
<tr>
<th scope="col">&nbsp; &nbsp;</th><th scope="col">Excellent</th><th scope="col">Very Good</th><th scope="col">Good</th><th scope="col">Bad</th>
</tr>
<tr>
<td >Food Quality</td>
<td><input type="radio" name="Name" id="RESULT_RadioButton-0-0-0" value="Food Quality is Excellent" /></td>
<td><input type="radio" name="Name"  id="RESULT_RadioButton-0-0-1" value="Food Quality is Very Good" /></td>
<td><input type="radio" name="Name"  id="RESULT_RadioButton-0-0-2" value="Food Quality is Good" /></td>
<td><input type="radio" name="Name"  id="RESULT_RadioButton-0-0-3" value="Food Quality is Bad" /></td>
</tr>
<tr>
<td>The Menu </td>
<td><input type="radio"  name="Names" id="RESULT_RadioButton-0-1-0" value="The Menu is Excellent" /></td>
<td><input type="radio" name="Names"  id="RESULT_RadioButton-0-1-1" value="The Menu is Very Good" /></td>
<td><input type="radio" name="Names"  id="RESULT_RadioButton-0-1-2" value="The Menu is Good" /></td>
<td><input type="radio" name="Names"  id="RESULT_RadioButton-0-1-3" value="The Menu is Bad" /></td>
</tr>
<tr>
<td>Dishes </td>
<td><input type="radio" name="Named"  id="RESULT_RadioButton-0-2-0" value="Dishes Are Excellent" /></td>
<td><input type="radio" name="Named"  id="RESULT_RadioButton-0-2-1" value="Dishes Are Very Good" /></td>
<td><input type="radio" name="Named"  id="RESULT_RadioButton-0-2-2" value="Dishes Are Good" /></td>
<td><input type="radio" name="Named"  id="RESULT_RadioButton-0-2-3" value="Dishes Are Bad" /></td>
</tr>
<tr>
<td>Service</td>
<td><input type="radio" name="Nam"  id="RESULT_RadioButton-0-3-0" value="Service is Excellent" /></td>
<td><input type="radio" name="Nam"  id="RESULT_RadioButton-0-3-1" value="Service is Very Good" /></td>
<td><input type="radio" name="Nam"  id="RESULT_RadioButton-0-3-2" value="Service is Good" /></td>
<td><input type="radio" name="Nam"  id="RESULT_RadioButton-0-3-3" value="Service is Bad" /></td>
</tr>
<tr>
<td>Tables</td>
<td><input type="radio" name="Namee"  id="RESULT_RadioButton-0-4-0" value="Tables Are Always Excellent" /></td>
<td><input type="radio" name="Namee"  id="RESULT_RadioButton-0-4-1" value="Tables Are Always Very Good" /></td>
<td><input type="radio" name="Namee"  id="RESULT_RadioButton-0-4-2" value="Tables Are Always Good" /></td>
<td><input type="radio" name="Namee"  id="RESULT_RadioButton-0-4-3" value="Tables Are Always Bad" /></td>
</tr>
<tr>
<td>Well Cooked</td>
<td><input type="radio" name="Namees"  id="RESULT_RadioButton-0-5-0" value="Well Cooked Excellent" /></td>
<td><input type="radio" name="Namees"  id="RESULT_RadioButton-0-5-1" value="Well Cooked Very Good" /></td>
<td><input type="radio" name="Namees"  id="RESULT_RadioButton-0-5-2" value="Well Cooked Good" /></td>
<td><input type="radio" name="Namees"  id="RESULT_RadioButton-0-5-3" value="Well Cooked Bad" /></td>
</tr>
<tr>
<td>Food is served impeccably</td>
<td><input type="radio" name="Nameed"  id="RESULT_RadioButton-0-6-0" value="Food is served impeccably Excellent" /></td>
<td><input type="radio" name="Nameed"  id="RESULT_RadioButton-0-6-1" value="Food is served impeccably Very Good" /></td>
<td><input type="radio" name="Nameed"  id="RESULT_RadioButton-0-6-2" value="Food is served impeccably Good" /></td>
<td><input type="radio" name="Nameed"  id="RESULT_RadioButton-0-6-3" value="Food is served impeccably Bad" /></td>
</tr>
<tr>
<td>Restaurant atmosphere </td>
<td><input type="radio" name="Na" id="RESULT_RadioButton-0-7-0" value="Restaurant atmosphere is Excellent" /></td>
<td><input type="radio" name="Na" id="RESULT_RadioButton-0-7-1" value="Restaurant atmosphere is Very Good" /></td>
<td><input type="radio" name="Na" id="RESULT_RadioButton-0-7-2" value="Restaurant atmosphere is Good" /></td>
<td><input type="radio" name="Na" id="RESULT_RadioButton-0-7-3" value="Restaurant atmosphere is Bad" /></td>
</tr>
<tr>
<td>Price Level</td>
<td><input type="radio" name="Nameee"  id="RESULT_RadioButton-0-8-0" value="Price Level is Excellent" /></td>
<td><input type="radio" name="Nameee"  id="RESULT_RadioButton-0-8-1" value="Price Level is Very Good" /></td>
<td><input type="radio" name="Nameee"  id="RESULT_RadioButton-0-8-2" value="Price Level is Good" /></td>
<td><input type="radio" name="Nameee"  id="RESULT_RadioButton-0-8-3" value="Price Level is Bad" /></td>
</tr>
<tr>
<td>Music</td>
<td><input type="radio" name="Nameees"  id="RESULT_RadioButton-0-9-0" value="Music is Excellent" /></td>
<td><input type="radio" name="Nameees"  id="RESULT_RadioButton-0-9-1" value="Music is Very Good" /></td>
<td><input type="radio" name="Nameees"  id="RESULT_RadioButton-0-9-2" value="Music is Good" /></td>
<td><input type="radio" name="Nameees"  id="RESULT_RadioButton-0-9-3" value="Music is Bad" /></td>
</tr>
</table>
	<input type="hidden" name="ID" value="<?php echo  @$MyObj->$ID ?>" />
<input type="submit" name="submit" value="submit">
</form>
          
</div>
           <br /> <br /> <br /> <br /> 
          





  
            
          <!-- end of main column -->
          
          
          <div id="side_column"  style="position:absolute;right:-5px;top:65px;" >
            <div class="side_column_section"  >
              <h4>Categories</h4>
              <ul class="category_list" id="nav">
                <li><a href="Login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                 <li><a href="Order.php">Order</a></li>
                 <li><a href="partyReserv.html">Party Reservation</a></li>
                 <li><a href="ReservEdit.php">Track Your Reservation</a></li>
                    
                <li><a href="About.html">About</a></li>
                
              </ul>
            </div>
            <div class="side_column_section"  >
              <h4>Our Address</h4>
              <a href="Diraction.html"><img src="images/map.jpg" alt="" /></a>
              <p> Address:6 - Oct.,<br />
                El-Hossary Square<br />
                <br />
                Tel: (002)388-3200<br />
                Tel: (002)345-5555<br />
                <br />
                Email:<br />
                <a href="#">sales@rosto.com</a> </p>
            </div>
            <div class="side_column_bottom"  id="nav"> </div>
          </div>
          <!-- end of side column -->
          <div class="cleaner"></div>
        </div>
        <!-- end of content -->
        <div class="cleaner"></div>
        <div class="content_bottom"></div>
      </div>
      <!-- end of content wrapper -->
      <div id="footer" >
        <ul class="footer_menu" >
          <li><a href="Home.html">Home</a></li>
          <li><a href="Menu.html">Menu</a></li>
          <li><a href="Gallery.html">Gallery</a></li>
          <li><a href="Evaluation.html">Evaluation</a></li>
          <li><a href="About.html">About</a></li>
          <li class="last_menu"><a href="logout.php">Logout</a></li>
        </ul>
        Copyright &copy; 2016 <a href="#">ACU</a> | Designed by <a target="_blank" rel="nofollow" href="http://www.templatemo.com">templatemo</a></div>
    </div>
    <!-- end of container -->
  </div>
</div>
</body>
</html>
