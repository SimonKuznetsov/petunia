const navItems = document.querySelectorAll('.nav__item');

navItems.forEach((navItem) => {
	navItem.addEventListener('click', function (e) {
		this.style.borderBottom = "1px solid white";
	});
});

const mobilHeader = document.querySelector('.line__mobil');
const openButton = document.querySelector('.line__menu');
const hamburger = document.querySelector('.line__hamburger');

openButton.addEventListener('click', function () {

	if (mobilHeader.classList.contains('open')) {
		mobilHeader.classList.add('close');
		mobilHeader.classList.remove('open');

		hamburger.classList.add('opend');
		hamburger.classList.remove('closed');
	} else {
		mobilHeader.classList.remove('close');
		mobilHeader.classList.add('open');

		hamburger.classList.add('closed');
		hamburger.classList.remove('opend');
	}
})