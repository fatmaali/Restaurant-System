<!DOCTYPE HTML>
<?php 
 session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="responsive photo gallery using colorbox">
        <title>Food</title>
        <link rel="shortcut icon" href="layout/images/logo.png">
        <link rel="stylesheet" type="text/css" href="layout/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="layout/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="layout/css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="layout/css/jquery.selectBoxIt.css">
        <link rel="stylesheet" href="layout/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="layout/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="layout/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="layout/css/ace-skins.min.css" />
    <link rel="stylesheet" href="layout/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="layout/css/colorbox.min.css" />
    <!--[if lte IE 9]>
      <link rel="stylesheet" href="layout/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="layout/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="layout/js/html5shiv.min.js"></script>
    <script src="layout/js/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Lobster|Lobster+Two|Pacifico|Saira+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="layout/css/owl.carousel.css" />
     <link rel="stylesheet" type="text/css" href="layout/css/front.css">
    </head>
    <body>
   
   <!--navbar-->
 <?php require_once "createmenu.php"; ?>
   <div class="navbar">
      <div class="dashbord">
          <ul>
             <?php
                if (isset($_SESSION['UserID'])) {
                 
                 echo '<li>
                      <a href="profile.php">
                        <img class="img-circle" src="layout/images/abdo.jpg" width="43" height="43" style="border: 2px solid #fff;" />
                        <span class="user-info"><small>Welcome,</small>Abdo</span> </a><i class="fa fa-angle-down"></i></li>
                              ';
                }
               ?>
                    <ul>
                      <li>
                        <a href="profile.php">
                          <i class="ace-icon fa fa-cog"></i>
                          Settings
                        </a>
                      </li>

                      <li>
                        <a href="profile.php">
                          <i class="ace-icon fa fa-user"></i>
                          Profile
                        </a>
                      </li>
                      <li>
                        <a href="../Model/LogoutModel.php">
                          <i class="ace-icon fa fa-power-off"></i>
                          Logout
                        </a>
                      </li>
                    </ul>
            
            <li><a href="Homepage.php"><i class="fa fa-home"></i>Home</a><i class="fa fa-close"></i></li>
       <!-- <li><a href="profile.php"><i class="fa fa-user-circle" aria-hidden="true"></i>My Account</a></li> -->
            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Contect Us</a></li>
            <!-- <li><a href="#"><i class="fa fa-address-book " aria-hidden="true"></i>Make Order</a></li> -->
       <!-- <li><a href="#" data-toggle="modal" data-target="#createmenu"><i class="fa fa-tags"></i>Create Menu</a></li> -->

            <li>
            <a href="#"><i class="fa fa-shopping-cart fa-lg"></i> Fix</a> <i class="fa fa-angle-down"></i>
            </li>
            <ul>
                <li><a href="#">Fastfood</a></li>
                <li><a href="#">HomeMade</a></li>
                <li><a href="#">Resturant</a></li>
                <li><a href="#">Other</a></li>
              </ul>
            <li>
              <a href="food.php"><i class="fa fa-cutlery fa-lg"></i> Food </a><i class="fa fa-angle-down" aria-hidden="true"></i>
            </li>
               <ul>
                <li><a href="#">Fastfood</a></li>
                <li><a href="#">HomeMade</a></li>
                <li><a href="#">Resturant</a></li>
                <li><a href="#">Other</a></li>
              </ul>
            <li>
            <a href="#"><i class="fa fa-truck fa-lg"></i>Delivery </a><i class="fa fa-angle-down" aria-hidden="true"></i>
            </li>
            <ul>
                <li><a href="#">Fastfood</a></li>
                <li><a href="#">HomeMade</a></li>
                <li><a href="#">Resturant</a></li>
                <li><a href="#">Other</a></li>
              </ul>
            <li>
            <a href="#"><i class="fa fa-shopping-cart fa-lg"></i>Shopping</a><i class="fa fa-angle-down" aria-hidden="true"></i>
            </li>
            <ul>
                <li><a href="#">Fastfood</a></li>
                <li><a href="#">HomeMade</a></li>
                <li><a href="#">Resturant</a></li>
                <li><a href="#">Other</a></li>
              </ul>
             <li><a href="Login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login/Signup</a></li>
              <li>
              <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Location</a><i class="fa fa-angle-down" aria-hidden="true"></i>
              </li>
              <ul>
                <li><a href="#">Cairo</a></li>
                <li><a href="#">Benha</a></li>
                <li><a href="#">Giza</a></li>
                <li><a href="#">Kaha</a></li>
              </ul>
             <!-- <li><a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign Up</a></li> -->
             <li><a href="#"><i class="fa fa-id-card" aria-hidden="true"></i>About Us</a></li>
             <li>
             <a href="#"><i class="fa fa-language" aria-hidden="true"></i>Language</a><i class="fa fa-angle-down" aria-hidden="true"></i>
             </li> 
             <ul>
                <li><a href="#">English</a></li>
                <li><a href="#">Arabic</a></li>
              </ul>
          </ul>
    </div>
       <div class="container-fluid">
           <div class="nav">
            <div class="row">

               <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
               <div class="logo"> <i class="fa fa-bars fa-3x" aria-hidden="true"></i>Business park
               </div>
                 
               </div>

               <!-- <div class="col-lg-3 col-md3 col-sm-3 col-xs-3">
               <div class="search">
                 <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                </div>
               </div> -->
             
               <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
               <div class="items pull-right">
                   <ul>
                       <li class="hidden-xs "><i class="fa fa-map-marker"></i> Location</li>
                       <li class="hidden-xs hidden-sm"><i class="fa fa-language"></i> En/Ar</li>
                       <li class="hidden-xs"><a href="Login.php" ><i class="fa fa-sign-in"></i> Login/SignUp</a></li>
                       <!-- <li><a style="cursor: pointer;"><i class="fa fa-search"></i></a></li> -->
                   </ul>
               </div>
               </div>
             </div>
           </div>
       </div>
       
   </div>
     


        
     