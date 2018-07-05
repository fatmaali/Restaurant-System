<?php
 

 require_once "include/Template/header.php";

   require_once '..\Controller\QueryBuilder.php';   

     $queryObj= new QueryBuilder;

     $providers =  $queryObj->selectAllProvider();
   
     $AllItem = $queryObj->selectAllItems();

     $AllRecommendItem = $queryObj->selectAllRecommendItems();
    
?>

<div class="container-fluid">
	<div class="row down">
		<div class="col-lg-2 col-md-3 col-sm-3 hidden-xs">
			<div class="sidebar">
				<div class="panel panel-info">
                <div class="panel-heading">
                   Service providers<i class="fa fa-angle-down pull-right fa-lg"></i>
                 </div>
                 <div class="panel-body">
                   <input type="text" class="form-control" placeholder="Enter Service provider">
                 	<ul class="clearfix content-list">
                 		<?php 

                              foreach ($providers as $provider) {

                              	echo " <li>
						             	<label>";
						     	        echo "<a href='profile.php?UserID={$provider->getUserID()}'>";
						     	         echo " ".$provider->getUserFname() ." ".$provider->getUserLname() ."</a>" ; 

							     echo "  </label>
									  </li>";	

						     }
                 		?>
                   </ul>
                 </div>
                </div>
                <div class="panel panel-info">
                <div class="panel-heading">
                   Price <i class="fa fa-angle-down pull-right fa-lg"></i>
                 </div>
                 <div class="panel-body">
                  <div class="price">
                 	<input type="number" name="" max="5000" min="20" placeholder="from" class="form-control">
                 	<input type="number" name="" max="5000" min="20" placeholder="to" class="form-control">
                 	<input type="submit" class="btn btn-info" value="Apply">
                 </div>	
                 </div>
               </div> 

			</div>
			
		</div>
		<div class="col-lg-8 col-md-7 col-sm-9 col-xs-12">
		<div class="bar col-lg-12 col-md-12"><form>
			<input type="text" name="search" placeholder="Search" class="form-control" > 
			<!-- <i class="fa fa-search"></i> -->
		</form></div>
		  
		<!-- sevice -->
		  <?php 

               foreach ($AllItem as $Item) {
               
                 echo '<div class="sevice col-lg-4 col-md-4 col-sm-6 col-xs-12">
                         <span>'. $Item->getMealPrice().' $</span>
					     <img src="layout/images/food6.jpg" class="img-thumbnail img-responsive"  width="300px" height="200px">
						   <div class="overlay col-lg-4 col-md-4 col-sm-6 col-xs-12">';
			           echo "<h3>". $Item->getMealName() ."</h3>";
			           echo "<p>". $Item->getItemDescription() ."</p>";
			        echo '<a class="btn btn-info btn-sm" href="fooddetails.php?ID='. $Item->getID().'"><i class="fa fa-eye"></i> Show  </a>
			  	          <a class="btn btn-success btn-sm" href="../Model/OrderModel.php?itemID='. $Item->getID() . '"><i class="fa fa-cart-plus"> Order</i></a>
                         </div>
			           </div>
			   	          ';   
			     		   
               }
		  ?>
			
	

		</div>

		


		<div class="col-lg-2 col-md-2  hidden-sm  hidden-xs">
			
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
  <!-- </div> -->
</div>

<?php
 require_once "include/Template/footer.php";
?>