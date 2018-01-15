(function($){

    //Responsive Menu

    $('.menu').hide();
    $('.menu-button-container').on('click',function(){
        $('.menu').toggle();
    })

	$('.hamburger-menu').on('click', function(event) {
        event.preventDefault();
        $('.bar').toggleClass('animate');
        $('.nav-list').css({"opacity":"1"}).toggle('slide').css({"display":"inherit"});
	})

//Typed Animation

    $(".element").typed({
        loop: false,
        backDelay: 0,
        typeSpeed: 10,
        strings: ["Want 150 with Tangerine?"]
     });
     
     $(".element2").typed({
        loop: true,
        startDelay:5000,
        backDelay: 2000,
        typeSpeed: 40,
        strings: ["<br/>Get $50 in when you open a Tangerine Bank Account", "<br/>Get $100 when you use Tangerine chequing account as your payroll",]
     });

     AOS.init({
        offset: 200,
        duration: 700,
        easing: 'ease-in-out'
      });
  

     //AOS
   
    //Smooth Scroll

      $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    }); //smooth-scroll function bracket

    //Screen Width 800

    function resize() {
        if ($(window).width() < 720) {
            $('.project-video').remove();
        }
    }

    resize();   

    //Sticky Header
    $('.fixed-header-container').hide();
    $(window).scroll(function(){
        var y = $(window).scrollTop();
        if(y >= 420){
            $('.fixed-header-container').show('1000','swing')
        }else{
            $('.fixed-header-container').hide('1000', 'swing');
        }
    })




})(jQuery)
