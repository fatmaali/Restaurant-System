<?php
session_start();
  require_once "include/Template/profileheader.php";
require_once '..\Controller\QueryBuilder.php';
      #echo $_REQUEST['UserID'];
  if(!empty($_REQUEST['UserID']))    
  {$id=$_REQUEST['UserID'];}

if(!empty($id))
{
  $User= new User($id);
  
  
}
else{
  

$User=QueryBuilder::selectUser($_SESSION['UserID']);
}
?>  

 <div class="container">
      
        <div class="modal fade" id="SpicalOrder" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-muted text-center"><i class="fa fa-envelope"></i> Special Order</h4>
              </div>
              <div class="modal-body clearfix Spical">
                <form class="form-horizontal" action="../Model/SpecialOrderModel.php">
                  <input type="hidden" name="PID" value="<?php echo $_REQUEST['UserID']; ?>">
                  <input type="text" 
                         name="Desc" 
                         required class="form-control" 
                         autocomplete="off" 
                         placeholder="Enter Spical Order"><br>
                  <button type="submit" class="btn btn-warning pull-right"><i class="fa fa-envelope"></i> Order Now</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        
    </div>
    <section class="content">

      <div class="row">
        <div class="col-md-3">
<?php  
if($User->getUserGender()=='female')
{ $img="female.png";
}
else
{
  $img="male.png";
}
 ?>
          <!-- Profile Image -->
          <div class="box box-primary down1">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="layout/images/<?php echo $img ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $User->getUserFname()." ".$User->getUserLname(); ?></h3>

              <p class="text-muted text-center"><i class="fa fa-phone fa-lg"></i> <?php echo $User->getUserMobile() ?> </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Meals</b> <a class="pull-right">14</a>
                </li>
                <li class="list-group-item">
                  <b>order</b> <a class="pull-right">10</a>
                </li>
               
              </ul>

              
            <?php
           
              $queryObj= new QueryBuilder;
      
             if(!empty($_REQUEST['UserID']))    
               {$RequestUT = $queryObj->selectUserType($_REQUEST['UserID']+"0");
               
               }

            else{
          
      
                $ut = $queryObj->selectUserType($_SESSION['UserID']);
              }
            
            if(!empty($_REQUEST['UserID'])) 
            {  if($RequestUT[0]=='provider')
                  { 
                  echo '<a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#SpicalOrder"><b><i class="fa fa-envelope"></i> Special Order</b></a>';
                   }
             }
            
             else if($ut[0] == 'provider')
              {
          
        
              echo    '<a href="#"  data-toggle="modal" data-target="#createmenu" class="btn btn-success btn-block"><b>
              <i class="fa fa-plus"></i> Add Meal</b></a>';
              }

              ?>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> <i class="fa fa-user"></i> About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Full Name</strong>

              <p class="text-muted">
               <?php echo $User->getUserFname()." ".$User->getUserLname(); ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php echo $User->getGov() ?></p>

              <hr>

              <strong><i class="fa fa-envelope"></i> Email</strong>

              <p class="text-muted"> <?php echo $User->getUserEmail() ?> </p>

              <hr>

              <strong><i class="fa fa-star margin-r-5"></i> <?php echo $User->getUserRate() ?></strong>

              <p><div class="rating inline" style="cursor: pointer;"></div></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9 down1">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <?php if(empty($_REQUEST['UserID']) ) 
            {
              $id=$_SESSION['UserID'];
              $U = new User($id);
              $userType = $queryObj->selectUserType($id);
              
               if($userType[0] != 'customer' )
               { echo
                  '<li class="active"><a href="#foodmeal" data-toggle="tab"><i class="fa fa-cutlery"></i> Food Meal</a></li>';
                  echo  '<li><a href="#order" data-toggle="tab"><i class="fa fa-flag"></i> Order</a></li>';
                echo    '<li><a href="#settings" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> Edit Profile</a></li>';
                } 
                else
                {
				echo	'<li><a href="#order" data-toggle="tab"><i class="fa fa-flag"></i> Order</a></li>';
                echo    '<li><a href="#settings" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> Edit Profile</a></li>';
				}
              } 
              
            else if ( !empty($_REQUEST['UserID'])){
                $id=$_REQUEST['UserID']+"0";
                $U = new User($id);
                $userType = $queryObj->selectUserType($id);
                
               
                if($userType[0] != 'customer' )
               { echo
                  '<li class="active"><a href="#foodmeal" data-toggle="tab"><i class="fa fa-cutlery"></i> Food Meal</a></li>';
                } 
            
              }
              ?>
                 
              
            </ul>


            
<div class="tab-content">
     <div class="active tab-pane" id="foodmeal">
                <!-- Fast Food -->
                <?php 

                     $Menuid= $queryObj->selectMenuID($id);
                if (!empty($Menuid))
                  {
                  $Result=  $queryObj->selectAllProviderMenuItems($Menuid);
                   }
                  if(count($Result) > 4) {
                 ?>
                <h4 class="text-muted"> Last Added</h4>
               

                 <div class='owl-carousel owl-theme'>

          <?php  
                 
                    $Menuid= $queryObj->selectMenuID($id);
                if (!empty($Menuid))
              {
              $Result=  $queryObj->selectAllProviderMenuItems($Menuid);
               foreach($Result as $Res) 
                {
          
          ?>     
                 
                 
                  
                   
                       
                        <div class="item">
                          <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food6.jpg" width="250" height="280" />
                                            <div class="text"> <div class="inner"> <?php echo $Res->getMealName(); ?> </div></div>
                                        </a>
                                         <div class="tools tools-bottom">
                                    <a class="btn btn-success btn-sm " href="fooddetails1.php?ID=<?php echo $Res->getID(); ?>" >
                                                  <i class="fa fa-eye"></i> Show
                                                </a>
                                                <a href="foodedit.php?ItemID=<?php echo $Res->getID();?>">
                                                    <i class="ace-icon fa fa-pencil"></i>
                                                </a>

                                    <a href="../Model/DeleteItemModel.php?ItemID=<?php echo $Res->getID();  ?>" class="confirm">
                                                    <i class="ace-icon fa fa-times red"></i>
                                                </a>

                                                <a class="btn btn-success btn-sm" href="../Model/OrderModel.php?itemID=<?php echo $Res->getID();  ?>">
                                                  <i class="fa fa-cart-plus"></i>Order
                                                </a>
                                         </div>
                                      </li>
                               </ul>
                        </div>
                        
 <?php                   
	}
  }  ?>

        
            </div> 

        
                 <!-- END LAST Addd -->
                   
<?php 
     
     }
            
             $Menuid= $queryObj->selectMenuID($id);
                if (!empty($Menuid))
              {
              $Result=  $queryObj->selectAllProviderMenuItems($Menuid);
               foreach($Result as $Res) 
                {
          
      
                 
                  
                           echo '<div class="col-md-4 col-xs-12">
                                <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food5.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">'; echo $Res->getMealName(); echo '</div></div>
                                        </a>
                                          <div class="tools tools-bottom">'; ?>
                                    <a class="btn btn-success btn-sm " href="fooddetails1.php?ID=<?php echo $Res->getID(); ?>">
                                  <?php     echo '  <i class="fa fa-eye"></i>Show
                                                </a>';
                                             echo "<a href='foodedit.php?ItemID={$Res->getID()}'>";
                                            echo ' <i class="ace-icon fa fa-pencil"></i>
                                                </a>

                                                <a href="#">
                                                    <i class="ace-icon fa fa-times red confirm"></i>
                                                </a>

                                                <a class="btn btn-success btn-sm">
                                                  <i class="fa fa-cart-plus"></i>Order
                                                </a>
                                         </div>
                                      </li>
                                </ul>
                            </div>
                            
                            ';
                             }
                                    } 
                                  
  
//}                         //  echo $Res->getID();  
                                   //    echo $Res->getMenuID();  
                
                                                                 
 ?>
                         
           
    <!-- /Home Made -->

            
      </div>
           <!-- /.tab-pane -->
          <div class="tab-pane" id="order">

               <div class="panel panel-warning">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-envelope"></i> Spical Order</h3>
                  </div>
                  <div class="panel-body">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" width="80" height="80" src="layout/images/abdo.jpg" alt="user image">
                        <span class="username"><a href="#">Abdo</a> </span>
                        <span class="msg-time">
                            <i class="ace-icon fa fa-clock-o"></i>
                            <span>Time</span>
                        </span>
                  </div>
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore
                  </p>

                  <a href="#" class="btn btn-warning conbtn"> Confirm </a>
                  <a href="#" class="btn btn-danger canbtn"><i class="fa fa-close"></i>Cancle </a>
                  <hr>
                   <div class="user-block">
                    <img class="img-circle img-bordered-sm" width="80" height="80" src="layout/images/abdo.jpg" alt="user image">
                        <span class="username"><a href="#">Abdo</a> </span>
                        <span class="msg-time">
                            <i class="ace-icon fa fa-clock-o"></i>
                            <span>Time</span>
                        </span>
                  </div>
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore
                  </p>
                  <a href="#" class="btn btn-warning conbtn"> Confirm </a>
                  <a href="#" class="btn btn-danger canbtn"><i class="fa fa-close"></i>Cancle </a>
                  <hr>
                   <div class="user-block">
                    <img class="img-circle img-bordered-sm" width="80" height="80" src="layout/images/abdo.jpg" alt="user image">
                        <span class="username"><a href="#">Abdo</a> </span>
                        <span class="msg-time">
                            <i class="ace-icon fa fa-clock-o"></i>
                            <span>Time</span>
                        </span>
                  </div>
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore
                  </p>
                  <a href="#" class="btn btn-warning conbtn"> Confirm </a>
                  <a href="#" class="btn btn-danger canbtn"><i class="fa fa-close"></i>Cancle </a>
                  <hr>
                  </div>
                </div>

                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-cart-arrow-down"></i> not Ready Order</h3>
                  </div>
                  <div class="panel-body">
                    <div class="user-block">
                  <?php 

                    $Gen=$User->getUserGender();
                   
                   if($Gen=='female')
                           {
                    echo ' <img class="img-circle img-bordered-sm" width="80" height="80" src="layout/images/female.png" alt="user image">';
                   }
                   else
                   {
                    echo ' <img class="img-circle img-bordered-sm" width="80" height="80" src="layout/images/male.png" alt="user image">';
                   }
                   
                    ?>
                        <span class="username"><a href="#">Abdo</a> </span>
                        <span class="msg-time">
                            <i class="ace-icon fa fa-clock-o"></i>
                            <span>Time</span>
                        </span>
                  </div>
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore
                  </p>
                  <a href="#" class="btn btn-warning"> Confirm </a>
                  <hr>

                   <div class="user-block">
                    <img class="img-circle img-bordered-sm" width="80" height="80" src="layout/images/abdo.jpg" alt="user image">
                        <span class="username"><a href="#">Abdo</a> </span>
                        <span class="msg-time">
                            <i class="ace-icon fa fa-clock-o"></i>
                            <span>Time</span>
                        </span>
                  </div>
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore
                  </p>
                  <a href="#" class="btn btn-warning"> Confirm </a>
                  <hr>
                  </div>
                </div>

                 <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-cart-plus"></i> Ready Order</h3>
                  </div>
                  <div class="panel-body">
                    <div class="user-block">
                    <img class="img-circle img-bordered-sm" width="80" height="80" src="layout/images/abdo.jpg" alt="user image">
                        <span class="username"><a href="#">Abdo</a> </span>
                        <span class="msg-time">
                            <i class="ace-icon fa fa-clock-o"></i>
                            <span>Time</span>
                        </span>
                  </div>
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore
                  </p>
                  
                  <hr>
                  </div>
                </div>

          </div>
              <!-- /.tab-pane -->
         
        <div class="tab-pane" id="settings">
               <h4 class="text-muted"> Personal Info</h4>
                <form class="form-horizontal" method="post" action="../Model/EditProfileModel.php">
                  <div class="form-group"> 
                    <label for="fname" class="col-sm-2 control-label"><i class="fa fa-user"></i>First Name</label>

                    <div class="col-sm-8">
                      <input type="text" 
                             class="form-control" 
                             name="fname"
                             pattern=".{3,0}"
                             title="please the name at least 3 character" 
                             id="fname" 
                             placeholder="<?php echo $User->getUserFname(); ?>">
                    </div>
                  </div>
                   <div class="form-group"> 
                    <label for="lname" class="col-sm-2 control-label"><i class="fa fa-user"></i>Last Name</label>

                    <div class="col-sm-8">
                      <input type="text" 
                             class="form-control" 
                             name="lname"
                             pattern=".{3,0}"
                             title="please the name at least 3 character" 
                             id="lname" 
                             placeholder="<?php echo $User->getUserLname(); ?>">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label"><i class="fa fa-phone"></i> Phone</label>

                    <div class="col-sm-8">
                      <input type="text" 
                             class="form-control" 
                             id="phone"
                             name="phone" 
                             placeholder="<?php echo $User->getUserMobile(); ?>">
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label"><i class="fa fa-picture-o"></i> Personal Photo</label>
                    <label class="ace-file-input col-sm-8">
                     <input type="file" id="id-input-file-2" name="pic">
                       <span class="ace-file-container" data-title="Choose">
                        <span class="ace-file-name" data-title="No File">
                        <i class=" ace-icon fa fa-upload"></i></span></span>
                       <a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>
                     </label>
                 </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Gender : </label>
                     <div class="col-sm-8">
                     <label>
                            <input name="gender" 
                                  type="radio" 
                                  class="ace"
                                   
                                  value="male" 
                                  id="male" 
                                  >
                              <span class="lbl"> Male</span>
                       </label>
                       <label>
                            <input name="gender" 
                                  type="radio" 
                                  class="ace"
                                  
                                   value="female" 
                                   id="female" 
                                  >
                              <span class="lbl"> Female</span>
                       </label>
                       </div>
                </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"><i class="fa fa-map-marker"></i>Location</label>
                 <div class="col-sm-8">
                 <select name="Governorate">
                    <option value="Alexandria">Alexandria</option>
                    <option value="Aswan">Aswan</option>
                    <option value="Asyut">Asyut</option>
                    <option value="Beheira">Beheira</option>
                    <option value="Beni Suef">Beni Suef</option>
                    <option value="Cairo">Cairo</option>
                    <option value="Dakahlia">Dakahlia</option>
                    <option value="Damietta">Damietta</option>
                    <option value="Faiyum">Faiyum</option>
                    <option value="Gharbia">Gharbia</option>
                    <option value="Giza">Giza</option>
                    <option value="Ismailia">Ismailia</option>
                    <option value="Kafr El Sheikh">Kafr El Sheikh</option>
                    <option value="Luxor">Luxor</option>
                    <option value="Matruh">Matruh</option>
                    <option value="Minya">Minya</option>
                    <option value="Monufia">Monufia</option>
                    <option value="New Valley">New Valley</option>
                    <option value="North Sinai">North Sinai</option>
                    <option value="Port Said">Port Said</option>
                    <option value="Qalyubia">Qalyubia</option>
                    <option value="Qena">Qena</option>
                    <option value="Red Sea"> Red Sea</option>
                    <option value="Sharqia">Sharqia</option>
                    <option value="Sohag">Sohag</option>
                    <option value="South Sinai">South Sinai</option>
                    <option value="Suez">Suez</option>
                 </select>
              </div>
            </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> Save Change</button>
                    </div>
                  </div>
                </form >
               <hr>
                 <h4 class="text-muted"> Change Password</h4>
                <form class="form-horizontal" method="post" action="../Model/ChangePassModel.php">
                  <div class="form-group"> 
                    <label for="password" class="col-sm-3 control-label"><i class="fa fa-lock"></i>Old Password</label>

                    <div class="col-sm-7">
                      <input type="assword" 
                             class="form-control" 
                             name="oldpassword"
                             pattern=".{8,0}"
                             title="please the name at least 8 character" 
                             id="Old Password" 
                             placeholder="Password">
                    </div>
                  </div>

                   <div class="form-group"> 
                    <label for="password" class="col-sm-3 control-label"><i class="fa fa-lock"></i>New Password</label>

                    <div class="col-sm-7">
                      <input type="password" 
                             class="form-control" 
                             name="password1"
                             pattern=".{8,0}"
                             title="please the name at least 8 character" 
                             id="password" 
                             placeholder="Password">
                    </div>
                  </div>

                   <div class="form-group"> 
                    <label for="password2" class="col-sm-3 control-label"><i class="fa fa-retweet"></i>Repeat password</label>
                    <div class="col-sm-7">
                      <input type="password" 
                             class="form-control" 
                             name="password2"
                             pattern=".{8,0}"
                             title="please the name at least 8 character" 
                             id="password2" 
                             placeholder="Repeat password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                      <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> Change Password</button>
                    </div>
                  </div>
                 
                </form>
         </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
     </div>
      <!-- /.row -->

    </section>




  <script src="layout/js/jquery-3.2.1.min.js"></script>
   <script src="layout/js/jquery.nicescroll.min.js"></script>
   <script src="layout/js/bootstrap.min.js"></script>
   <script src="layout/js/jquery-ui.min.js"></script>
   <script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='layout/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
   <script src="layout/js/jquery.selectBoxIt.min.js"></script>
    <script src="layout/js/ace-elements.min.js"></script>
    <script src="layout/js/ace.min.js"></script>
    <script src="layout/js/jquery.raty.min.js"></script>
<!--     <script src="layout/js/jquery.raty.js"></script>-->    
   <script src="layout/js/jquery.colorbox.min.js"></script>
    <script src="layout/js/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="layout/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="layout/js/demo.js"></script>
    <script src="layout/js/jquery.slimscroll.min.js"></script>
    <script src="layout/js/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.0/sweetalert2.js"></script>
   <script src="layout/js/front.js"></script>


</body>
</html>
