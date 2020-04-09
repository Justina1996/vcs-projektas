$(document).ready(function(){
	// Galerija
	$('[data-fancybox="gallery1"]').fancybox({
		loop: true,
		animationEffect: "fade",
		animationDuration: 1000,
	});
    $('.burger, .overlay').click(function(){
        $('.burger').toggleClass('clicked');
        $('.overlay').toggleClass('show');
        $('nav').toggleClass('show');
        $('body').toggleClass('overflow');
      });
});
