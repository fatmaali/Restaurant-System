<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rosto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />


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
        <div id="content"  >
          <div id="main_column">
          
          
          <H1>Reservation</H1> 
<br /> <br /> <br /> <br /> <br /> 
 <br /> <br /> <br />
<center>
<h4></h4>
</center>

<?php


include "checksearch.php";
$em=$_REQUEST["Email"];



if(isinresevation() == FALSE)//replace it to "FALSE" RUN!!!!!
{
echo "<center></center>";
echo"<div style='position:absolute;left:147px;top:250px;width:744px;height:509px;z-index:23;'>";
echo "<form method='POST' action='ReservEdit2.php' onsubmit='return validateForm();'>";
//echo "<div>";
echo "<label>Time:</label>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp";
echo "<label>From</label> ";
echo "<input type='time' name='Fromm'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ";

echo "<label >To</label>&nbsp ";
echo "<input type='time' name='Too'>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<label>Date:</label>";
echo "<input type='date' name='Date' min='2010-1-1' max='2020-12-31'>&nbsp &nbsp &nbsp";
echo "<label>Adults:</label>";

echo "<input type ='text' name ='Adult'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
echo "<label>Email:</label>";
//echo $em;

echo "<input type='hidden' name='Email' value='$em' />";
echo "<br><br /> <br />";
echo "<label  >Phone:</label>";
echo "<input type='number' name ='Phone'>";
echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
echo "<br /> <br /><br /> <br /><br /> <br />";
echo "<label >Comment:</label>";
echo "<textarea name='Comment'  rows='5' cols='42'></textarea>";
echo "<br> <br>";


echo "<input type='submit' value='Submit' style='position:absolute;left:430px;top:334px;width:96px;height:25px;z-index:0;'>";

echo"</form>";

echo "</div>";
}
else{
echo "Not Found Email";
}
?>          
          <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 
            
            
          <!-- end of main column -->
          
          <div id="side_column" style="position:absolute;right:-5px;top:65px;">
            <div class="side_column_section">
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
            <div class="side_column_section" >
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
      <div id="footer"  >
        <ul class="footer_menu">
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

