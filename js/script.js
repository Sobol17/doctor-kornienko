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

	if (!localStorage.getItem('cookieAccepted')) {
		$('#cookie-banner').show()
	} else {
		$('#cookie-banner').hide()
	}

	$('#cookie-accept').on('click', function () {
		localStorage.setItem('cookieAccepted', 'true')
		$('#cookie-banner').fadeOut()
	})

	$('#cookie-close').on('click', function () {
		$('#cookie-banner').fadeOut()
	})
})
