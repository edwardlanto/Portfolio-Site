(function($){
    $('.menu').hide();
    $('.menu-button-container').on('click',function(){
        $('.menu').toggle();
    })

	$('.hamburger-menu').on('click', function(event) {
        event.preventDefault();
        $('.bar').toggleClass('animate');
        $('.nav-list').toggle('slide').css({"display":"flex"});
	})


   
    $(window).scroll( function(){
        $('.fadein').each( function(){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},1000);
            }
        }); 
    });

    $('.main-carousel').flickity({
        cellAlign: 'left',
        contain: true
    });


//Typed Animation

    $(".element").typed({
        loop: false,
        backDelay: 500,
        typeSpeed: 40,
        strings: ["Hi, I'm Edward. I Design and Create ^1000 "]
     });
     
     $(".element2").typed({
        loop: true,
        startDelay:0,
        backDelay: 500,
        typeSpeed: 40,
        strings: ["Landing<br> Pages ^1000", "Responsive<br> Websites ^1000", "UI Designs ^1000", "Wordpress<br> Themes ^1000"]
     });



})(jQuery)
