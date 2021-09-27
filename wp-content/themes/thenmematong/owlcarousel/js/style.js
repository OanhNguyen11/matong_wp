$(function() {

    $('button.navbar-toggler').click(function(){
        $('.navbar .navbar-collapse').toggleClass('show');
    })


    $('#slide-kh .carousel-inner .carousel-item:first-child').addClass('active');


    //owl carousel 
       

});


            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:true,
                autoplay:false,
                autoplayTimeout:3000,
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
 