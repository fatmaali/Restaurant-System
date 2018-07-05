


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
      <div id="content_wrapper"  >
        <div id="content">
          <div id="main_column">
          
          
          <H1>ORDER</H1> 
            <br /> <br /> <br /> <br />
          
          <div id="wb_Login1">
          
         <?php
 include "connect.php";
 //connectToDatabase("rosto");
      $sum=0;
	  $allorder;
	  echo  "<form action='order2.php' method='post'>";
       echo"<table width=30%  style='position:absolute;left:38px;top:178px;width:309px;height:349px;z-index:15;'>";
      echo "<tr>";
      echo"<td>"."your order"."</td><td> "."</td><td>"."amount"."</td> <td>"."size"."</td><td>"."price"."</td>"."</tr>";
     	$sql="select * from menu order by ID";
		$StudentDataSet = mysql_query($sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($lineArr = mysql_fetch_array($StudentDataSet))
		{    
			// print_r($lineArr);
		
		if (isset($_POST[$lineArr[4]])) { 
        $w=$_POST[$lineArr[4]];
        if($w==0){
        	echo "";
        }else{echo"<tr>";
		echo "<td>".$lineArr[1]."</td> <td colspan='2' >".$_POST[$lineArr[4]]."</td><td>"."small"."</td><td>".$lineArr[2]."</td>"."<br>";
		$allorder=$allorder."<br>".($lineArr[1].$_POST[$lineArr[4]]."small".$lineArr[2]);
		$sum=$sum+(intval($_POST[$lineArr[4]])* $lineArr[2]);}
		
		
		} else {
			echo '';
		}

		$re=$_POST[$lineArr[5]];
		if (isset($_POST[$lineArr[4]])) {
			if($re==0){
				echo '';
			}else{
        echo"<tr>";
		echo "<td>".$lineArr[1]."</td> <td colspan='2'>".$_POST[$lineArr[5]]."</td> <td>"."large"."</td><td>".$lineArr[3]."</td>"."<br>";
		
		    $sum=$sum+(intval($_POST[$lineArr[5]])* $lineArr[3]);
  			     $allorder =$allorder."<br>".($lineArr[1].$_POST[$lineArr[5]]."big".$lineArr[3]);
		}
	
		
	}	}
	echo "</table>";
	
	echo "<label style='position:absolute;left:38px;top:633px;width:210px;height:64px;line-height:64px;z-index:4;'>"."Total Is: ".$sum."</label>";
	$hidden=$sum;
	echo "<label style='position:absolute;left:434px;top:1200px;width:142px;height:91px;line-height:91px;z-index:2;'>Adress:</label>";
	echo "<label style='position:absolute;left:407px;top:1600px;width:142px;height:83px;line-height:83px;z-index:8;'>Arrive time</label>";
	echo "<input type ='number' name='hour' size='1' id='Combobox1' style='position:absolute;left:599px;top:1600px;width:67px;height:51px;z-index:9;' min='1' max='12' />";
	 echo "<input type='number' name='minit' size='1' style='position:absolute;left:707px;top:1600px;width:64px;height:47px;z-index:10;' min='0' max= '59'/>";
     echo "<input type='number'  style='position:absolute;left:614px;top:1400px;width:208px;height:37px;line-height:37px;z-index:5;' name='telephone'>";
	 echo  "<label  style='position:absolute;left:608px;top:1700px;width:40px;height:45px;line-height:45px;z-index:12;'>HOUR</label>";
     echo "<label style='position:absolute;left:717px;top:1700px;width:56px;height:49px;line-height:49px;z-index:13;'>MIN</label>";
     echo "<input type='text'name='adress' style='position:absolute;left:614px;top:1200px;width:208px;height:67px;line-height:67px;z-index:3;'>";
	 echo "<select  size='1' name='amorpm' style='position:absolute;left:817px;top:1600px;width:68px;height:41px;z-index:11;'>";
echo "<option>AM</option>";
echo "<option>PM</option>";
echo"</select>";
	 
    echo "<input type='submit' name='order' value='send order' style='position:absolute;left:697px;top:1900px;width:135px;height:62px;z-index:6;'>";

	echo "<label  style='position:absolute;left:426px;top:1400px;width:123px;height:74px;line-height:74px;z-index:1;'>Telephone:</label>
";
	echo "<input type='submit' id='Button2' value='back' style='position:absolute;left:26px;top:1900px;width:129px;height:57px;z-index:16;'>";
	echo  "<label style='position:absolute;left:46px;top:76px;width:174px;height:82px;line-height:82px;z-index:0;'>Your have ordered</label>";
	echo '<input type="hidden" name="hiddenX" value="'.$hidden.'" />';
	echo '<input type="hidden" name="hid" value="'.$allorder.'" />';
?>





     
     
     


</div>
           <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />  <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 
           <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 
           <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 
          
          





  
            
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
      <div id="footer">
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

