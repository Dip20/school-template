
// slider js
   $('.owl-carousel').owlCarousel({
   loop:true,
   margin:10,
   nav:false,
   autoplay:true,
   autoplayTimeout:2500,
   dots:false,
   responsiveClass:true,
   responsive:{
   0:{
       items:1
   },
   600:{
       items:1,
       nav:true,
   },
   762:{
       items:3
   }
   }
   });
