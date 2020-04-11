$(document).ready(function () {
	$('.head_carousel').owlCarousel({
        autoplay:false,
        nav:false,
        loop:true,
        dots:false,
		autoplayTimeout:10000,
		rewind: true,
        smartSpeed:1000,
        animateOut: 'fadeOut',
        items:1,
        navText: ['<i class="glyphicon glyphicon-menu-left"></i>', '<i class="glyphicon glyphicon-menu-right"></i>']
    });
});