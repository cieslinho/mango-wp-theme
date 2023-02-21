const navBtn = document.querySelector('.nav__btn')
const soundBtn = document.querySelector('.headers__sound-btn')

// Listening to the video element
const headerVideo = document.querySelectorAll('.header__video')

for (let i = 0; i < headerVideo.length; i++) {
	headerVideo[i].addEventListener('mouseenter', function (e) {
		headerVideo[i].play()
	})
	headerVideo[i].addEventListener('mouseout', function (e) {
		headerVideo[i].pause()
	})
}

const handleNav = () => {
	const navMenu = document.querySelector('.nav__list')
	const navOverlay = document.querySelector('.nav__overlay')
	const navItems = document.querySelectorAll('.nav__list')

	navItems.forEach(navItem => {
		navItem.addEventListener('click', () => {
			navMenu.classList.remove('active')
			navOverlay.classList.remove('active')
			navBtn.classList.remove('active')
		})
	})

	navMenu.classList.toggle('active')
	navBtn.classList.toggle('active')
	navOverlay.classList.toggle('active')

	navOverlay.addEventListener('click', () => {
		navMenu.classList.remove('active')
		navBtn.classList.remove('active')
		navOverlay.classList.remove('active')
	})
}

const musicToggle = () => {
	const headersVideo = document.querySelector('.headers__video')
	headersVideo.muted = !headersVideo.muted
	soundBtn.classList.toggle('active')
}

navBtn.addEventListener('click', handleNav)
soundBtn.addEventListener('click', musicToggle)

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
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
})
