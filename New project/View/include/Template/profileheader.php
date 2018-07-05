<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="responsive photo gallery using colorbox">
        <link rel="shortcut icon" href="layout/images/logo.png">
        <title>Food</title>
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
    <link rel="stylesheet" href="layout/css/AdminLTE.min.css" />
    <link rel="stylesheet" href="layout/css/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.css" />
     <link rel="stylesheet" type="text/css" href="layout/css/front.css">
    </head>
    <body>
<?php require_once "createmenu.php"; ?>
<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				
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

				<div class="navbar-header pull-left logo">
				   <div class="navbar-brand">
					<i class="fa fa-bars fa-lg" aria-hidden="true"></i>
					<a href="Homepage.php">
						<small>
							 Business park
						</small>
					</a>
					</div>	
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle "></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#order">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														Spical Order
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

								
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#" class="clearfix">
												<img src="http://placehold.it/50/333" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="http://placehold.it/50/333" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="http://placehold.it/50/333" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="http://placehold.it/50/333" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="http://placehold.it/50/333" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="layout/images/abdo.jpg"  width="40" height="40" />
								<span class="user-info">
									<small>Welcome</small>
									Abdo
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
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

								<li class="divider"></li>

								<li>
									<a href="../Model/LogoutModel.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

<?php 
   //require_once "foodedit.php";
?> 

<?php 
 // require_once "fooddetails1.php";
?>