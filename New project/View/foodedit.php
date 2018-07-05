<?php


    session_start();


      require_once "include/Template/profileheader.php";

       require_once '..\Controller\QueryBuilder.php';   

     $queryObj= new QueryBuilder;              
    # echo $_REQUEST['ID'];

     $itemObj= new Item($_REQUEST['ItemID']);   

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

<div class="col-md-9 down1">
<div class="panel panel-default foodedit">
  <div class="panel-heading text-center"><h4><i class="fa fa-edit"></i> Edit Meal </h4></div>
  <div class="panel-body">
     <div class="picedit col-sm-4 col-lg-4 col-md-4 hidden-xs">
          <img src="layout/images/food2.jpg" class="img-thumbnail img-responsive" width="250" height="380">
          <div class="form-group">
                <label class="ace-file-input">
                 <input type="file" id="id-input-file-2" name="pic">
                   <span class="ace-file-container" data-title="Choose">
                    <span class="ace-file-name" data-title="No File">
                    <i class=" ace-icon fa fa-upload"></i></span></span>
                   <a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>
                </label>
              </div>
              </div>
  
              <form class="form-horizontal col-sm-7 col-lg-7 col-md-7" method="post" action="../Model/EditItemModel.php">
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Meal Name </label>

                    <div class="col-lg-9 col-sm-10">
                      <input type="text" 
                              id="form-field-1" 
                              placeholder="Meal Name" 
                               class="col-lg-12 col-xs-10 col-sm-11"
                               value="<?php echo $itemObj->getMealName(); ?>" 
                              name="name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Price </label>

                    <div class=" col-lg-10 col-sm-10">
                      <input type="number" 
                              id="form-field-2" 
                              placeholder="price"
                              value="<?php echo $itemObj->getMealPrice(); ?>" 
                              class="col-lg-11 col-xs-10 col-sm-11" 
                              name="name">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="ace-file-input col-xs-offset-2 col-xs-9">
                     <input type="file" id="id-input-file-2" name="pic">
                       <span class="ace-file-container" data-title="Choose">
                        <span class="ace-file-name" data-title="Photo">
                        <i class=" ace-icon fa fa-upload"></i></span></span>
                       <a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>
                    </label>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-3">Decripation </label>

                    <div class="col-lg-10 col-sm-10">
                      <textarea id="form-field-3" 
                              placeholder="Meal Decripation" 
                              class="col-lg-11 col-xs-10 col-sm-11" 
                              name="desc" rows="4" cols="60" >
                                <?php echo $itemObj->getItemDescription(); ?>
                              </textarea> 
                             
                    </div>
                  </div>
                 
                   <div class="col-sm-12 ">
                   <input type="submit" name="submit" value="Save Change" class="btn btn-primary pull-right">
                   </div>
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