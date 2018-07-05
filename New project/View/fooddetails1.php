<?php

     session_start();

  require_once "include/Template/profileheader.php";

  require_once '..\Controller\QueryBuilder.php'; 


 $queryObj= new QueryBuilder;              
 // echo $_REQUEST['ID'];               
 $itemObj= new Item($_REQUEST['ID']);   
# echo var_dump($queryObj->selectProvIDByMenu($itemObj->getMenuID()));    
 $userObj= new User($queryObj->selectProvIDByMenu($itemObj->getMenuID()));


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
                <form class="form-horizontal">
                  <input type="text" 
                         name="order" 
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
            {  if($RequestUT=='provider')
                  { 
                  echo    '<a href="#" class="btn btn-danger btn-block"><b><i class="fa fa-envelope"></i> Special Order</b></a>';
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
         

<div class="col-md-9">
 <div class="panel panel-default fooddetails down1">
  <div class="panel-heading text-center"><h4><i class="fa fa-edit"></i> Show Details </h4>
  </div>
  <div class="panel-body clearfix">
  
              <img src="layout/images/food4.jpg" width="180" height="200" class="pull-left">
          <div class="pull-left dateils">
            <h2>Meal Name : <?php echo @$itemObj->getMealName(); ?> </h2> 
            <p> <?php echo @$itemObj->getItemDescription(); ?></p>
             <p>Make By : <a href="profile.php?UserID=<?php echo $userObj->getUserID();   ?>"> <?php echo $userObj->getUserFname()." ".$userObj->getUserLname(); ?></a></p>
            <span class="btn btn-default"><?php echo @$itemObj->getMealPrice(); ?></span>
            <p><div id="foodname" class="rat inline" style="cursor: pointer;" value="1"></div></p>
            <button class="btn btn-primary"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> Order</button>
          </div>
          <form class="form-horizontal clearfix">
                  <input
                  type="text"
                  name="feedback"
                  class="form-control pull-left"
                  placeholder="Login for Send Feedback"
                  required
                  />
             <input type="submit" name="submit" value="Send" class="btn btn-info pull-right">
        </form>
            <!-- </div> -->
  </div>
   <div class="panel-footer">
   	<a class="btn btn-danger" href="profile.php"><i class="fa fa-arrow-left"></i> Back</a>
   </div>
 </div>
</div>
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