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
