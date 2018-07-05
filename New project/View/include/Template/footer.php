
<?php  //require_once"login.php"; ?>

<div class="contactus">
  <div class="container-fluid">
    <div class="row">
     <div class="col-lg-4 col-md-4">
       <div class="customer-service col-lg-12 col-md-12">
         <h4>CUSTOMER SERVICE</h4>
           <i class="fa fa-envelope fa-3x" aria-hidden="true"></i><h5>Contact Us</h5>
          <label>Phone</label> &shy; 98071
       </div>
       <div class="followus col-lg-12 col-md-12">
         <h4> Follow Us</h4>
         <ul>
           <li><a href=""><i class="fa fa-facebook-square fa-2x"></i></a></li>
           <li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>
           <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
           <li><a href=""><i class="fa fa fa-instagram fa-2x"></i></a></li>
         </ul>
       </div>
     </div>
     <!-- <div class="col-lg-8 col-md-8 col-xs-8">
      <div class="feedback">
        <form class="form-horizontal col-lg-12 col-md-12 col-xs-12" role="form">
              <input type="email" name="" placeholder="Email" class="form-control col-xs-12 col-md-12 col-sm-12">
              <input type="text" name="" placeholder="Subject" class="form-control col-xs-12 col-md-12 col-sm-12"> 
              <textarea class="form-control" placeholder="Message" rows="10"></textarea>
              <input type="submit" name="" class="btn btn-info" value="Send">   
          </form>
       </div>
      </div> -->
    </div>
  </div>
</div>

  
  <div class="footer">
    <div class="">
      <div class="row">
        <div class="copy col-lg-12 col-md-12 col-xs-12">
          <p>CopyRights &copy; Recived By TEQNIAE</p>
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
})
    </script>
    <script src="layout/js/ace-elements.min.js"></script>
    <script src="layout/js/ace.min.js"></script>
    <script src="layout/js/jquery.raty.min.js"></script>
<!--     <script src="layout/js/jquery.raty.js"></script>-->    
   <script src="layout/js/jquery.colorbox.min.js"></script>
   <script src="layout/js/owl.carousel.js"></script>
   <script src="layout/js/jquery.slimscroll.min.js"></script>
   <script src="layout/js/front.js"></script>
</body>
</html>
