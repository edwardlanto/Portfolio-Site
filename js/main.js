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

    $('.main-carousel').flickity({
        cellAlign: 'left',
        contain: true
    });


//Typed Animation

    $(".element").typed({
        loop: false,
        backDelay: 500,
        typeSpeed: 40,
        strings: ["Hi, I'm Edward. I Develop and build ^1000 "]
     });
     
     $(".element2").typed({
        loop: true,
        startDelay:0,
        backDelay: 500,
        typeSpeed: 40,
        strings: ["Landing<br> Pages ^1000", "Responsive<br> Websites ^1000", "UI <br>Designs ^1000", "Wordpress<br> Themes ^1000"]
     });

     //AOS
    $('.project-item').attr({
        'data-aos':'fade-down-right',
    })

    // $('.project-item:first-child').attr('data-aos-delay','200')
    // $('.project-item:nth-child(2)').attr('data-aos-delay','400')
    // $('.project-item:nth-child(3)').attr('data-aos-delay','600')
    // $('.project-item:nth-child(4)').attr('data-aos-delay','800')
    // $('.project-item:nth-child(5)').attr('data-aos-delay','1000')
    // $('.project-item:nth-child(6)').attr('data-aos-delay','1200')

    $('.project-item').each(function(index){
        var delayNumber = index * 200;
        $(this).attr('data-aos-delay', delayNumber)
    })

    $('.project-item').hover(function(){
        $(this).find('.project-image').css({
            "opacity":"0.8"
        },1000)
        $(this).find('.project-title').css({
            "background":"rgba(0,0,0,0.5)"
        })
    })

    AOS.init({
      offset: 200,
      duration: 700,
      easing: 'ease-in-out'
    });


    //FancyBox

    $(".fancybox").fancybox();

    //Header Animation


    $('.tlt').textillate({
        in: {

    // set the delay factor applied to each consecutive character
        delayScale: 1.5,

        // initialDelay: 20000,

        // set the delay between each character
        delay: 200,

        // set to true to animate all the characters at the same time
        sync: false,

        // randomize the character sequence
        // (note that shuffle doesn't make sense with sync = true)
        shuffle: false,

        // reverse the character sequence
        // (note that reverse doesn't make sense with sync = true)
        reverse: false,

    },

         // set the type of token to animate (available types: 'char' and 'word')
  type: 'char'
});

    $('.tlt2').textillate({
        initialDelay: 1200,
        delay: 100
    })

    $('.tlt3').textillate({
        delay:200
    })

    $('.tlt4').textillate({
        loop:false,
        in:{
            delay:20,
            effect: 'fadeInLeftBig',
            minDisplayTime:10000
        }
    })

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

    function checkSubmit(){
        if($('.wpcf7-response-output').hasClass('wpcf7-mail-sent-ok')){
            $('.fa-paper-plane-o').css({"color":"#0ade74"}).addClass('plane-move')
            setTimeout(function(){
            },2000)
        }
    }

    $('.wpcf7-submit').on('click',function(){
        setTimeout(function(){
            checkSubmit();
        }, 2000)
     });



})(jQuery)
