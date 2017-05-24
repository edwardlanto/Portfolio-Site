(function($){
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
     
     AOS.init({
      offset: 200,
      duration: 700,
      easing: 'ease-in-out',
    });

    $(".fancybox").fancybox();

    $(".fancybox:eq(0)").attr("data-caption", "Multipage, Wordpess theme that utilizes custom field suites and custom post types")
    $(".fancybox:eq(1)").attr("data-caption", "Caption2")
    $(".fancybox:eq(2)").attr("data-caption", "Caption3")


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
        delay: 100,
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
      if ($(window).width() > 720) {
      }

    }

    resize();


})(jQuery)
