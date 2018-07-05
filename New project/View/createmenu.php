<?php# session_start(); ?>

<div class="container">
  
  <div class="modal fade" id="createmenu" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content createmenu">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Menu</h4>
        </div>
        <div class="modal-body">
        <p>
         <div class="pic col-sm-4">
          <img src="layout/images/food2.jpg" class="img-thumbnail img-responsive" width="200" height="190">
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
            <div class="form col-sm-8">
              <form name="menuForm" action="..\Model\CreateMenuModel.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Meal Name </label>

                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" 
                              id="form-field-1" 
                              placeholder="Meal Name" 
                              class="col-lg-11 col-xs-10 col-sm-5" 
                              name="name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Price </label>

                    <div class=" col-lg-9 col-sm-9">
                      <input type="number" 
                              id="form-field-2" 
                              placeholder="price" 
                              class="col-lg-11 col-xs-10 col-sm-5" 
                              name="price">
                    </div>
                  </div>
            <div class="form-group hidden-md hidden-lg ">
                    <label class="ace-file-input col-xs-offset-2 col-xs-9">
                     <input type="file" id="id-input-file-2" name="pic">
                       <span class="ace-file-container" data-title="Choose">
                        <span class="ace-file-name" data-title="Photo">
                        <i class=" ace-icon fa fa-upload"></i></span></span>
                       <a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-3">Decripation </label>

                    <div class=" col-sm-9">
                      <textarea id="form-field-3" 
                              placeholder="Meal Decripation" 
                              class="col-lg-11 col-xs-10 col-sm-5" 
                              name="Desc" rows="5" ></textarea> 
                             
                    </div>
                  </div>
                  <div class="form-group">
                      <label class=" control-label no-padding-right">Meal Category</label>
                         <select name="category"  required>
                            <option value="fast food">Fast Food</option>
                            <option value="homemade">Home Made</option>
                            <option value="dessert">dessert</option>
                            <option value="other">Other</option>
                         </select>
                   </div>
                   <div class="col-sm-12 ">
                   <input type="reset" name="cancel" value="Cancel" class="btn btn-danger pull-right">
                   <input type="submit" name="submit" value="Save Change" class="btn btn-primary pull-right">
                   </div>
              </form>
            </div>
            </p>
           </div>
      </div>
      
    </div>
  </div>
  
</div>