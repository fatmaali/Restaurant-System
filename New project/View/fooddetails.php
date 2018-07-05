<?php

    

  require_once "include/Template/header.php";

  require_once '..\Controller\QueryBuilder.php'; 


 $queryObj= new QueryBuilder;              
                
 $itemObj= new Item($_REQUEST['ID']);   

$userObj= new User($queryObj->selectProvIDByMenu($itemObj->getMenuID()));

 $AllRecommendItem = $queryObj->selectAllRecommendItems();

?> 

<div class="container-fluid">
  <div class="row down">
  
  <div class="col-md-3 hidden-xs">
      
      <div>
        <div class="panel panel-info">
                <div class="panel-heading">
                   Recommend List<i class="fa fa-angle-down pull-right fa-lg"></i>
                 </div>
                 <div class="panel-body">

                   <?php 

                     foreach ($AllRecommendItem as $Item) {
                     
                       echo '<div class="col-sm-12 col-md-12">
                    <div class="thumbnail">
                      <img src="layout/images/food9.jpg" alt="...">
                       <div class="caption">';
                       echo "<h3>". $Item->getMealName() ."</h3>";
                       echo "<p>". $Item->getItemDescription() ."</p>";
                       echo '<p><a class="btn btn-info btn-sm" href="fooddetails.php?ID='. $Item->getID().'"> Show</a>
                          <a class="btn btn-success btn-sm" href="../Model/OrderModel.php?itemID='. $Item->getID() . '"> Order</a></p>
                               </div>
                       </div>
                      </div> 
                              ';   
                           
                         }
                ?>
                      
              
                </div>
             </div> 
    </div>
  </div>   
 
<div class="col-md-9">
 <div class="panel panel-default fooddetails">
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
          <?php
               
               if (isset($_SESSION['UserID'])) {
                 
                 echo '
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
                 ';
               }
               else{

                echo '<a href="Login.php" class="btn btn-success btn-block " style="margin-top:20px;"> 
                Login OR Register for can Make Feedback </a>';
               }
           ?>
          
            <!-- </div> -->
  </div>
   <div class="panel-footer">
    <a class="btn btn-danger" href="food.php"><i class="fa fa-arrow-left"></i> Back</a>
   </div>
 </div>
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