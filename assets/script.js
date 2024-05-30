document.addEventListener("DOMContentLoaded", function () {
	var toggle = document.querySelector(".nav-toggle");
	var dropdownMenu = document.querySelector(".dropdown-menu");

	toggle.addEventListener("click", function (event) {
		dropdownMenu.classList.toggle("active");
	});

	document.addEventListener("click", function (event) {
		var isClickInsideToggle = toggle.contains(event.target);
		if (!isClickInsideToggle && dropdownMenu.classList.contains("active")) {
			dropdownMenu.classList.remove("active");
		}
	});

	let carouselPrev = document.querySelector(".carousel-control-prev");
	let carouselNext = document.querySelector(".carousel-control-next");
	let isManualScroll = false;

	carouselPrev.addEventListener("click", function () {
		// Move to the previous item
		if (currentIndex > 0) {
			currentIndex--;
		} else {
			currentIndex = carouselItems.length - 1; // Move to the last item if at the beginning
		}
		carousel.scrollTo({
			left: carouselItems[currentIndex].offsetLeft,
			behavior: "smooth",
		});
	});

	carouselNext.addEventListener("click", function () {
		// Move to the next item
		if (currentIndex < carouselItems.length - 1) {
			currentIndex++;
		} else {
			currentIndex = 0; // Move to the first item if at the end
		}
		carousel.scrollTo({
			left: carouselItems[currentIndex].offsetLeft,
			behavior: "smooth",
		});
	});

	let carousel = document.querySelector(".carousel");
	let carouselItems = document.querySelectorAll(".carousel-item");
	let currentIndex = 0;

	function scrollToNextItem() {
		if (currentIndex < carouselItems.length - 1) {
			currentIndex++;
		} else {
			currentIndex = 0;
		}
		carousel.scrollTo({
			left: carouselItems[currentIndex].offsetLeft,
			behavior: "smooth",
		});
	}

	setInterval(scrollToNextItem, 3000);
});

// import { GUI } from 'https://cdn.skypack.dev/dat.gui'

// const CONFIG = {
//   explode: false,
//   spread: 20,
//   dot: 2,
//   width: 300,
//   height: 300,
//   size: 512,
//   speed: 20,
//   brightness: 1.4,
//   dots: true,
//   noise: true,
//   intersect: true,
// }
// const UPDATE = () => {
//   for (const key of Object.keys(CONFIG)) {
//     if (key !== 'intersect' && key !== 'dots' && key !== 'noise')
//       document.documentElement.style.setProperty(`--${key}`, CONFIG[key])
//     if (key === 'intersect') {
//       document.documentElement.style.setProperty(
//         '--intersect',
//         CONFIG.intersect ? 'source-in, xor' : 'unset'
//       )
//       document.documentElement.style.setProperty(
//         '--intersect-moz',
//         CONFIG.intersect ? 'intersect' : 'unset'
//       )
//     }
//     // Work out the mask combo
//     document.documentElement.className = ''
//     if (!CONFIG.dots && CONFIG.noise) document.documentElement.className = 'noise-mask'
//     if (CONFIG.dots && !CONFIG.noise) document.documentElement.className = 'dots-mask'
//     if (!CONFIG.dots && !CONFIG.noise) document.documentElement.className = 'no-mask'
//   }
// }

// const EXPLODE = () => {
//   document.documentElement.toggleAttribute('data-exploded')
// }

// const CTRL = new GUI({
//   width: 320,
// })
// CTRL.add(CONFIG, 'explode').name('Explode?').onChange(EXPLODE)
// CTRL.add(CONFIG, 'spread', 1, 100, 1).name('Spread (px)').onChange(UPDATE)
// CTRL.add(CONFIG, 'dot', 1, 100, 1).name('Dot Size (px)').onChange(UPDATE)
// CTRL.add(CONFIG, 'width', 100, 600, 1)
//   .name('Canvas Width (px)')
//   .onChange(UPDATE)
// CTRL.add(CONFIG, 'height', 100, 600, 1)
//   .name('Canvas Height (px)')
//   .onChange(UPDATE)
// CTRL.add(CONFIG, 'size', 1, 1920, 1).name('Mask Size (px)').onChange(UPDATE)
// CTRL.add(CONFIG, 'brightness', 0.5, 5, 0.1).name('Brightness').onChange(UPDATE)
// CTRL.add(CONFIG, 'speed', 2, 60, 1).name('Speed (s)').onChange(UPDATE)
// CTRL.add(CONFIG, 'intersect').name('Mask Composite').onChange(UPDATE)
// CTRL.add(CONFIG, 'dots').name('Dot Mask').onChange(UPDATE)
// CTRL.add(CONFIG, 'noise').name('Perlin Mask').onChange(UPDATE)

// UPDATE()
