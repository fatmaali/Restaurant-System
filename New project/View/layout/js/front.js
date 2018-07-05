  $(document).ready(function() {

       'use strict';

    $("select").selectBoxIt({
      autoWidth:false
    });

    $("body").niceScroll({
      cursorcolor:'#f7a11a',
      cursorwidth: "9px",
      smoothscroll: true,
      cursorborderradius: "5px"
    });
    $('.nav-tabs-custom > .tab-content').niceScroll({
      cursorcolor:'#f7a11a',
      cursorwidth: "9px",
      smoothscroll: true,
      cursorborderradius: "5px"
    });

   $('.tab-pane .panel .panel-body').slimScroll({
          color: '#f7a11a',
          opacity: 1,
          // alwaysVisible: true
      });
    $('.panel-body .content-list').slimScroll({
          color: '#f7a11a',
          opacity: 1,
          // alwaysVisible: true
      });
      $(".logo .fa-bars").click(function(){
          
          if($(".dashbord").css('left') == '-240px'){
          
                 $('.dashbord').animate({
                     left:'-1px',
                   },500);
                 $(".logo").animate({
                   
                   left:'150px',
                 },500);


          }
          else{
              
              $('.dashbord').animate({
                     left:'-240px',
                   },500);
               $(".logo").animate({
                   
                   left:'0',
                 },500);
          }
      });

       $(".dashbord ul li .fa-close").click(function(){
        
         $('.dashbord').animate({
                     left:'-240px',
                   },500);
               $(".logo").animate({
                   
                   left:'0',
                 },500);
       });

        $('[placeholder]').focus(function(){

          var data = $(this).attr('placeholder');
          $(this).attr('data',data).attr('placeholder','');

      });
      $('[placeholder]').blur(function(){

          var data = $(this).attr('data');
          $(this).attr('placeholder',data).removeAttr('data');

      });

      $(".dashbord ul li").click(function(){
        $(this).next("ul").slideToggle().siblings();
          if($(this).children("i").hasClass("fa-angle-down")){
            $(this).children("i").not(".fa-close").removeClass("fa-angle-down").addClass("fa-angle-up");
          }
          else{
            $(this).children("i").not(".fa-close").removeClass("fa-angle-up").addClass("fa-angle-down");
          }
      });
      
     
      $('.login-page h4 span').click(function(){

        $(this).addClass('selected').siblings().removeClass('selected');

        $('.login-page form').slideUp(300);

        $('.'+$(this).data('class')).slideDown(300);
         console.log("ok");

     });

        $('.rating').raty({
             // 'cancel' : true,
            'half': true,
            'starType' : 'i',
             'score':'2',
             'readOnly':true
        });

        
        $('#'+$('.rat').attr('id')).raty({
            'half': true,
            'starType' : 'i',
            'score':$('#'+$('.rat').attr('id')).attr('value'),
            'readOnly':true
        });

       
      

   $(".sevice .overlay .showfood").click(function(){

    $(".fooddetails .modal-body img").attr("src",$(this).parent("div").prev("img").attr("src"));

   });

   $(".homeserve .thumbnail .caption .showdetalis").click(function(){

    $(".fooddetails .modal-body img").attr("src",$(this).parent("p").parent('div').prev("img").attr("src"));

   }); 

   // console.log( $('.rating').raty('score'));      
   
//    $('#itemslider').carousel({ interval: 5000 });

// $('.carousel-showmanymoveone .item').each(function(){
// var itemToClone = $(this);

// for (var i=1;i<4;i++) {
// itemToClone = itemToClone.next();

// if (!itemToClone.length) {
// itemToClone = $(this).siblings(':first');
// }

// itemToClone.children(':first-child').clone()
// .addClass("cloneditem-"+(i))
// .appendTo($(this));
// }
// });     


$('.multi-item-carousel').carousel({
  interval: 4000
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});



$('.conbtn').click(function(){

  $(this).next('.canbtn').delay(60000).hide(400);
  
  // var date1 = new Date();
  // var time2 = date1.getMinutes();

  // var time = time2 + 2;

  //  $(this).next('.canbtn').html(time +" "+ time2);

  // if (time2 == time) {
    
  //   $(this).next('.canbtn').hide(400);

  // }

});

   // $('.foodedit').fadeOut(10);
   // $('.fooddetails').fadeOut(10);
  

// $(".tools-bottom .fa-pencil").click(function(){

//   $('.foodedit').fadeIn(1000);
// });

// $('.foodedit .panel-footer .btn').click(function(){



//    $('.foodedit').fadeOut(1000);
// });

// $(".tools-bottom .fa-eye").parent('a').click(function(){

//   $('.fooddetails').fadeIn(1000);
// });

// $('.fooddetails .panel-footer .btn').click(function(){

//    $('.fooddetails').fadeOut(1000);
// });

// $('.showdetalis').click(function(){

//   $('.fooddetails').fadeIn(1000);

// });

$('.confirm').click(function(){
  
  swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function () {
  swal(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  )
});

 // confirm("you are sure delete this item?");

});



});
