const progressCircle = document.querySelector('.autoplay-progress svg')
const progressContent = document.querySelector('.autoplay-progress span')
var swiper = new Swiper('.mySwiper', {
	spaceBetween: 30,
	centeredSlides: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	// autoHeight: true,
	loop: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	on: {
		autoplayTimeLeft(s, time, progress) {
			progressCircle.style.setProperty('--progress', 1 - progress)
			progressContent.textContent = `${Math.ceil(time / 1000)}s`
		},
	},
})

var swiperSecond = new Swiper('.residents__cards-swiper', {
	breakpoints: {
		640: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 25,
		},
		1024: {
			slidesPerView: 4,
			spaceBetween: 35,
		},
	},
	centeredSlides: true,
	loop: true,
	rewind: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
})
