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

function popupMail() {
	alert('Wiadomość została wysłana')
}

;(function () {
	// get all data in form and return object
	function getFormData(form) {
		var elements = form.elements
		var honeypot

		var fields = Object.keys(elements)
			.filter(function (k) {
				if (elements[k].name === 'honeypot') {
					honeypot = elements[k].value
					return false
				}
				return true
			})
			.map(function (k) {
				if (elements[k].name !== undefined) {
					return elements[k].name
					// special case for Edge's html collection
				} else if (elements[k].length > 0) {
					return elements[k].item(0).name
				}
			})
			.filter(function (item, pos, self) {
				return self.indexOf(item) == pos && item
			})

		var formData = {}
		fields.forEach(function (name) {
			var element = elements[name]

			// singular form elements just have one value
			formData[name] = element.value

			// when our element has multiple items, get their values
			if (element.length) {
				var data = []
				for (var i = 0; i < element.length; i++) {
					var item = element.item(i)
					if (item.checked || item.selected) {
						data.push(item.value)
					}
				}
				formData[name] = data.join(', ')
			}
		})

		// add form-specific values into the data
		formData.formDataNameOrder = JSON.stringify(fields)
		formData.formGoogleSheetName = form.dataset.sheet || 'responses' // default sheet name
		formData.formGoogleSendEmail = form.dataset.email || '' // no email by default

		return { data: formData, honeypot: honeypot }
	}

	function handleFormSubmit(event) {
		// handles form submit without any jquery
		event.preventDefault() // we are submitting via xhr below
		var form = event.target
		var formData = getFormData(form)
		var data = formData.data

		// If a honeypot field is filled, assume it was done so by a spam bot.
		if (formData.honeypot) {
			return false
		}

		disableAllButtons(form)
		var url = form.action
		var xhr = new XMLHttpRequest()
		xhr.open('POST', url)
		// xhr.withCredentials = true;
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4 && xhr.status === 200) {
				form.reset()
				var formElements = form.querySelector('.form-elements')
				if (formElements) {
					formElements.style.display = 'none' // hide form
				}
				var thankYouMessage = form.querySelector('.thankyou_message')
				if (thankYouMessage) {
					thankYouMessage.style.display = 'block'
				}
			}
		}
		// url encode form data for sending as post data
		var encoded = Object.keys(data)
			.map(function (k) {
				return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
			})
			.join('&')
		xhr.send(encoded)
	}

	function loaded() {
		// bind to the submit event of our form
		var forms = document.querySelectorAll('form.gform')
		for (var i = 0; i < forms.length; i++) {
			forms[i].addEventListener('submit', handleFormSubmit, false)
		}
	}
	document.addEventListener('DOMContentLoaded', loaded, false)

	function disableAllButtons(form) {
		var buttons = form.querySelectorAll('button')
		for (var i = 0; i < buttons.length; i++) {
			buttons[i].disabled = true
		}
	}
})()

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
