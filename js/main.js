(function($){
    $('.menu').hide();
    $('.menu-button-container').on('click',function(){
        $('.menu').toggle();
    })

	$('.hamburger-menu').on('click', function(event) {
        event.preventDefault();

		$('.bar').toggleClass('animate');
        $('.nav-list').toggle('slide');
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
  // options
  cellAlign: 'left',
  contain: true
});


})(jQuery)
