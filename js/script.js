$(document).ready(function () {
	const newsSlider = new Swiper('.news-slider', {
		slidesPerView: 1,
		spaceBetween: 30,
		navigation: {
			nextEl: '.news-head__btn--next',
			prevEl: '.news-head__btn--prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
		},
	})

	const testimonialsSlider = new Swiper('.testimonials-slider', {
		slidesPerView: 1,
		spaceBetween: 30,
		navigation: {
			nextEl: '.testimonials-head__btn--next',
			prevEl: '.testimonials-head__btn--prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
		},
	})
})
