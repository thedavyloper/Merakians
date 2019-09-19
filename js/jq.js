$(function () {


	$('.slider-panel button#slide-to-signup').click(function () {


		$('.slider')
			.removeClass('slider-left')
			.addClass('slider-right');


		$('.slider-panel')
			.removeClass('slider-panel-right')
			.addClass('slider-panel-left');


		$('.signup-form')
			.removeClass('signup-form-leave')
			.addClass('signup-form-enter');



		$('.signin-form')
			.removeClass('signin-form-enter')
			.addClass('signin-form-leave');
	});

	$('.slider-panel button#slide-to-signin').click(function () {


		$('.slider')
			.removeClass('slider-right')
			.addClass('slider-left');


		$('.slider-panel')
			.removeClass('slider-panel-left')
			.addClass('slider-panel-right');


		$('.signup-form')
			.removeClass('signup-form-enter')
			.addClass('signup-form-leave');

		$('.signin-form')
			.removeClass('signin-form-leave')
			.addClass('signin-form-enter');

	});
});