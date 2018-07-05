 <!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="responsive photo gallery using colorbox">
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
     <link rel="stylesheet" type="text/css" href="layout/css/front.css">
    </head>
    <body>

<div class="container login-page">
          <h4 class="text-center"><a href="Homepage.php"> Logo</a><span class="selected" data-class="login" >login </span>|<span  data-class="signup"> Signup</span></h4>
       
        <!-- Login Page -->
  <form name="login" class="login" method="post" action="../Model/LoginModel.php">
    <div class="form-group clearfix">
     <span class="block input-icon input-icon-right">
      <input
      type="text"
      name="email"
      class="form-control"
      placeholder="Enter Email"
      autocomplete="off"
      required
      />
      <i class="ace-icon fa fa-envelope"></i>
    </span>
    </div>
    <div class="form-group clearfix">
    <span class="block input-icon input-icon-right">
      <input
      type="password"
      name="password"
      class="form-control"
      placeholder="Enter Password"
      autocomplete="new-password"
      required
      />
      <i class="ace-icon fa fa-lock"></i>
      </span>
    </div>
      <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
      <hr>
    </form>

    <!-- Sign Up Page -->
   <form method="post" action="..\Model\SignupModel.php" name="signupForm" class="signup">
    <div class="form-group first clearfix">
     <span class="block input-icon input-icon-right col-xs-6">
       <input
      type="text"
      name="fname"
      class="form-control block"
      placeholder="Farst Name"
      autocomplete="off"
      required
      />
      <i class=" ace-icon fa fa-user"></i>
      </span>
      <span class="block input-icon input-icon-right col-xs-6">
     <input
      type="text"
      name="lname"
      class="form-control block"
      placeholder=" Last Name"
      autocomplete="off"
      required
      />
      <i class=" ace-icon fa fa-user"></i>
      </span>
    </div>
   <!--  <div class="form-group clearfix">
    <span class="block input-icon input-icon-right">
     <input
      type="text"
      name="Lname"
      class="form-control"
      placeholder=" Last Name"
      autocomplete="off"
      required
      />
      <i class=" ace-icon fa fa-user"></i>
      </span>
     </div> -->

    <div class="form-group clearfix">
     <span class="block input-icon input-icon-right">
      <input
      pattern=".{3,}"
      title="The Username must be 4 chars"
      type="text"
      name="username"
      class="form-control"
      placeholder="Enter UserName"
      autocomplete="off"
      required
      />
      <i class="ace-icon fa fa-user"></i>
      </span>
    </div>
      <div class="form-group clearfix">
      <span class="block input-icon input-icon-right">
        <input
        type="text"
        name="email"
        class="form-control"
        placeholder="Enter Email"
        required
        />
        <i class="ace-icon fa fa-envelope"></i>
        </span>
    </div>
    <div class="form-group ">
        <div>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="ace-icon fa fa-phone"></i>
            </span>
            <input class="form-control input-mask-phone" 
            type="text" 
            id="form-field-mask-2"
            pattern=".{11,}"
            title="The Mobile Phone Must 11 Number"
            name="mobile"
            placeholder="Mobile Phone Number"
            autocomplete="off"
            required
            >
          </div>
        </div>
  
     </div>
    <div class="form-group clearfix">
    <span class="block input-icon input-icon-right">
      <input
      minlength ="4"
      type="password"
      name="password1"
      class="form-control"
      placeholder="Enter Password"
      autocomplete="new-password"
      required
      />
      <i class="ace-icon fa fa-lock"></i>
      </span>
    </div>
    <div class="form-group clearfix">
    <span class="block input-icon input-icon-right">
      <input
      minlength = "4"
      type="password"
      name="password2"
      class="form-control show"
      placeholder="Enter Confirm Password"
      autocomplete="new-password"
      required
      />
      <i class="ace-icon fa fa-retweet"></i>
      </span>
    </div>
    <div class="form-group">
      <label>Gender : </label>
   
     <label>
            <input name="gender" 
                  type="radio" 
                  class="ace"
                  name="gander" 
                  value="male" 
                  id="male" 
                  required
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
                   required
                  >
              <span class="lbl"> Female</span>
       </label>
     </div>
          <div class="form-group">
          <label class="control-label">Governorate</label>
                 <select name="governorate" required>
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

    <div class="form-group">
          <label class="control-label">SignUp As</label>
                 <select name="usertype" required>
                    <option value="customer">User</option>
                    <option value="provider">User Provider</option>
                 </select>
     </div>
      <input type="submit" class="btn btn-success btn-block" name="signup" value="Signup">
    </form>
        
    
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
   <!-- ace scripts -->
    <script type="text/javascript">
                jQuery(function($) {
            var $overflow = '';
            var colorbox_params = {
              rel: 'colorbox',
              reposition:true,
              scalePhotos:true,
              scrolling:false,
              previous:'<i class="ace-icon fa fa-arrow-left"></i>',
              next:'<i class="ace-icon fa fa-arrow-right"></i>',
              close:'&times;',
              current:'{current} of {total}',
              maxWidth:'100%',
              maxHeight:'100%',
              onOpen:function(){
                $overflow = document.body.style.overflow;
                document.body.style.overflow = 'hidden';
              },
              onClosed:function(){
                document.body.style.overflow = $overflow;
              },
              onComplete:function(){
                $.colorbox.resize();
              }
            };

            $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
            $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
            
            
            $(document).one('ajaxloadstart.page', function(e) {
              $('#colorbox, #cboxOverlay').remove();
             });
          }); </script>
    <script src="layout/js/ace-elements.min.js"></script>
    <script src="layout/js/ace.min.js"></script>
    <script src="layout/js/jquery.raty.min.js"></script>
<!--     <script src="layout/js/jquery.raty.js"></script>-->  
<script src="layout/js/jquery.slimscroll.min.js"></script>
 <script src="layout/js/owl.carousel.js"></script>  
   <script src="layout/js/jquery.colorbox.min.js"></script>
   <script src="layout/js/front.js"></script>
</body>
</html>