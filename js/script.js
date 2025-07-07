$(document).ready(function () {
	Fancybox.bind('[data-fancybox]')

	// header burger
	$('.header__burger').click(function () {
		$('.burger-menu__nav').toggleClass('hide')
	})

	$(document).click(function (e) {
		if (!$(e.target).closest('.header__burger').length) {
			$('.burger-menu__nav').addClass('hide')
		}
	})
})
