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
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="layout/images/food13.jpeg" class="img-responsive" alt="...">
	      <div class="carousel-caption">
		    <h3>Food Service</h3>
		    <p>The Description</p>
		    <input type="button" name="" value="Go TO>>" class="btn btn-info">
		  </div>
	    </div>
	    <div class="item">
	      <img src="layout/images/food13.jpeg" class="img-responsive" alt="...">
		  <div class="carousel-caption">
		    <h3>Food Service</h3>
		    <p>The Description</p>
		    <input type="button" name="" value="Go TO>>" class="btn btn-info">
		  </div>
		</div>
	     <div class="item">
	      <img src="layout/images/food13.jpeg" class="img-responsive" alt="...">
	      <div class="carousel-caption">
		    <h3>Food Service</h3>
		    <p>The Description</p>
		    <input type="button" name="" value="Go TO>>" class="btn btn-info">
		  </div>
	    </div>
	    The Businuss Park
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	 </div>

	 <?php 

	     if(count($AllItem) > 4){  

	      ?>	

     <div class="col-md-12">
	   <div class='owl-carousel owl-theme'> 
	  <?php 
        foreach ($AllItem as $Item) {
        	
        	echo ' <div class="item">
         	          <div class="thumbnail homeserve">
			 		      <img src="layout/images/food4.jpg" class="img-responsive" alt="..." height="180">
			 		        <div class="caption">';
		                 echo"<h4>".$Item->getMealName()."</h4>";
		                 echo"<p>".$Item->getItemDescription()."</p>";
		        echo '<p><div class="rating inline" style="cursor: pointer;"></div></p>
					        <p>
					        <a href="fooddetails.php?ID='. $Item->getID().'" class="btn btn-success btn-sm ">
					          <i class="fa fa-eye"></i>Show</a> 
					        <a href="../Model/OrderModel.php?itemID='. $Item->getID() . '" class="btn btn-info btn-sm">
					        <i class="fa fa-cart-plus"></i>Order</a></p>
					      </div>
					    </div>
                     </div>';         	 		        
          }
	  ?> 
         
	  </div>
    </div>
  <?php } ?>

   <!-- ********************************************************** -->
   <?php 
        foreach ($AllItem as $Item) {
           
           echo ' <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 homeserve">
					    <div class="thumbnail">
					      <img src="layout/images/food7.jpg" alt="...">
					        <div class="caption">';
					        echo"<h4>".$Item->getMealName()."</h4>";
		                    echo"<p>".$Item->getItemDescription()."</p>";
		       echo ' <p><div  class="rating inline" style="cursor: pointer;"></div></p>
					        <p>
					         <a href="fooddetails.php?ID='. $Item->getID().'" class="btn btn-success btn-sm">
					         <i class="fa fa-eye"></i>Show</a> 
					        <a href="../Model/OrderModel.php?itemID='. $Item->getID() . '" class="btn btn-info btn-sm">
					        <i class="fa fa-cart-plus"></i>Order</a></p>
					      </div>
					    </div>
			         </div>';               

      } ?>

	</div>
	 <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
	 	
			
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
</div>
<!--  <div class="container-fluid">
 	<div class="row">
 		<div class="order col-lg-12 col-md-12 ">
 			<span class="btn btn-danger pull-right">Order</span>
 		</div>
 	</div>
 </div> -->
 
<?php
 require_once "include/Template/footer.php";
?>