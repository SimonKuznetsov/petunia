const navItems = document.querySelectorAll('.nav__item');

navItems.forEach((navItem) => {
	navItem.addEventListener('click', function (e) {
		this.style.borderBottom = "1px solid white";
	});
});