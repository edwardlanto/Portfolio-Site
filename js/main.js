(function($){
    $('.menu').hide();
    $('.menu-button-container').on('click',function(){
        $('.menu').toggle();
    })

	$('.hamburger-menu').on('click', function() {
		$('.bar').toggleClass('animate');
	})

})(jQuery)
