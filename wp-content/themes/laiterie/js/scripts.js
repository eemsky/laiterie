(function ($, root, undefined) {

	$(function () {

		'use strict';

		// ********************************

		$('.slider-home').slick({
			dots: true,
		    infinite: true,
		    speed: 110,
			autoplay: true,
			slidesToScroll: 1,


		});
		$('.slider-partenaire').slick({
			dots: true,
			infinite: true,
			speed: 100,
			autoplay: true,
			slidesToScroll: 1,
			slidesToShow: 5,
			responsive: [
				  {
					breakpoint: 992,
					settings: {
						slidesToShow: 4,

					}
				},
				{
				  breakpoint: 992,
				  settings: {
					  slidesToShow: 3,

				  }
			  }
				  // You can unslick at a given breakpoint now by adding:
				  // settings: "unslick"
				  // instead of a settings object
				]
		});


		// ********************************


	});

})(jQuery, this);

new WOW().init();
