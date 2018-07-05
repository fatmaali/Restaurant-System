<?php

  require_once "include/Template/profileheader.php";

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

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="layout/images/abdo.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Abdelrhman</h3>

              <p class="text-muted text-center"><i class="fa fa-phone fa-lg"></i>01210499831</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Meals</b> <a class="pull-right">14</a>
                </li>
                <li class="list-group-item">
                  <b>order</b> <a class="pull-right">10</a>
                </li>
               
              </ul>

              <a href="#"  data-toggle="modal" data-target="#createmenu" class="btn btn-success btn-block"><b>
              <i class="fa fa-plus"></i> Add Meal</b></a>
              <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#SpicalOrder"><b><i class="fa fa-envelope"></i> Special Order</b></a>
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
                Abdelrhman Bayuomi
               
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">kaha , Cairo</p>

              <hr>

              <strong><i class="fa fa-envelope"></i> Email</strong>

              <p class="text-muted"> Abdomet66@gmail.com </p>

              <hr>

              <strong><i class="fa fa-star margin-r-5"></i> Rate</strong>

              <p><div id="user" class="rat inline" style="cursor: pointer;" value="5"></div></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#foodmeal" data-toggle="tab"><i class="fa fa-cutlery"></i> Food Meal</a></li>
              <li><a href="#order" data-toggle="tab"><i class="fa fa-flag"></i> Order</a></li>
              <li><a href="#settings" data-toggle="tab"><i class="fa fa-pencil-square-o"></i> Edit Profile</a></li>
            </ul>
       <div class="tab-content">
     <div class="active tab-pane" id="foodmeal">
                <!-- Fast Food -->
                 <h4 class="text-muted"> Last Added</h4>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food1.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                        <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm" href="fooddetails1.php">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="foodedit.php">
                                                    <i class="ace-icon fa fa-pencil" ></i>
                                                </a>

                                                <a href="#" >
                                                    <i class="ace-icon fa fa-times red confirm"></i>
                                                </a>

                                                <a class="btn btn-success btn-sm">
                                                  <i class="fa fa-cart-plus"></i>Order
                                                </a>
                                         </div>
                                      </li>
                                </ul>
                          </div>
                        <div class="item">
                          <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food3.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                        <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm" href="fooddetails1.php">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="foodedit.php">
                                                    <i class="ace-icon fa fa-pencil"></i>
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
                        <div class="item">
                          <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food6.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                        <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm" href="fooddetails1.php ">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="foodedit.php">
                                                    <i class="ace-icon fa fa-pencil"></i>
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
                        <div class="item">
                          <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food6.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                         <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm" href="foodedit.php">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="fooddetails1.php">
                                                    <i class="ace-icon fa fa-pencil"></i>
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
                       
                    </div>

                <!-- end Fast Food -->
       <!-- Home Made -->
            <h4 class="text-muted"> Food Meal </h4>
                  <div class="col-md-12">
                      <!-- <div class="carousel slide multi-item-carousel" id="theCarousel"> -->
                        <!-- <div class="carousel-inner"> -->
                          <!-- <div class="item active"> -->
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food5.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                          <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm" href="?id=4&stat=show">
                                                  <i class="fa fa-eye"></i>Show 
                                                </a>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-pencil"></i>
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

                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food5.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                          <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-pencil"></i>
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
                          <!-- </div> -->
                          <!-- <div class="item"> -->
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food6.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                         <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-pencil"></i>
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
                          <!-- </div> -->
                          <!-- <div class="item"> -->
                            <div class="col-md-4 col-xs-12 col-sm-4">
                                 <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food7.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                         <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-pencil"></i>
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

                            <div class="col-md-4 col-xs-12 col-sm-4">
                                 <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food7.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                         <div class="tools tools-bottom">
                                                <a class="btn btn-success btn-sm">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-pencil"></i>
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

                            <div class="col-md-4 col-xs-12 col-sm-4">
                                 <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food7.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                         <div class="tools tools-bottom">
                                               <a class="btn btn-success btn-sm" href="#Show?id=4">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-pencil"></i>
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

                            <div class="col-md-4 col-xs-12 col-sm-4">
                                 <ul class="ace-thumbnails">
                                    <li>
                                        <a  data-rel="colorbox">
                                          <img src="layout/images/food7.jpg" width="250" height="280" />
                                                <div class="text"> <div class="inner">Sample Caption on Hover</div></div>
                                        </a>
                                         <div class="tools tools-bottom">
                                               <a class="btn btn-success btn-sm">
                                                  <i class="fa fa-eye"></i>Show
                                                </a>
                                                <a href="#">
                                                    <i class="ace-icon fa fa-pencil"></i>
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
                       <!-- <hr>  -->
                    </div>
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
                <form class="form-horizontal">
                  <div class="form-group"> 
                    <label for="fname" class="col-sm-2 control-label"><i class="fa fa-user"></i>First Name</label>

                    <div class="col-sm-8">
                      <input type="text" 
                             class="form-control" 
                             name="fname"
                             pattern=".{3,0}"
                             title="please the name at least 3 character" 
                             id="fname" 
                             placeholder="First Name">
                    </div>
                  </div>
                   <div class="form-group"> 
                    <label for="lname" class="col-sm-2 control-label"><i class="fa fa-user"></i>Last Name</label>

                    <div class="col-sm-8">
                      <input type="text" 
                             class="form-control" 
                             name="fname"
                             pattern=".{3,0}"
                             title="please the name at least 3 character" 
                             id="lname" 
                             placeholder="Last Name">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label"><i class="fa fa-phone"></i> Phone</label>

                    <div class="col-sm-8">
                      <input type="text" 
                             class="form-control" 
                             id="phone"
                             name="phone" 
                             placeholder="Phone">
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
                                  name="gander" 
                                  value="male" 
                                  id="male" 
                                  >
                              <span class="lbl"> Male</span>
                       </label>
                       <label>
                            <input name="gender" 
                                  type="radio" 
                                  class="ace"
                                  name="gander" 
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
                </form>
               <hr>
                 <h4 class="text-muted"> Change Password</h4>
                <form class="form-horizontal">
                  <div class="form-group"> 
                    <label for="password" class="col-sm-3 control-label"><i class="fa fa-lock"></i>New Password</label>

                    <div class="col-sm-7">
                      <input type="password" 
                             class="form-control" 
                             name="fname"
                             pattern=".{3,0}"
                             title="please the name at least 3 character" 
                             id="password" 
                             placeholder="Password">
                    </div>
                  </div>
                   <div class="form-group"> 
                    <label for="password2" class="col-sm-3 control-label"><i class="fa fa-retweet"></i>Repeat password</label>
                    <div class="col-sm-7">
                      <input type="text" 
                             class="form-control" 
                             name="password2"
                             pattern=".{3,0}"
                             title="please the name at least 3 character" 
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

<!-- <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016</strong> All rights
    reserved.
</footer> -->


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