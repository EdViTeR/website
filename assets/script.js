document.addEventListener("DOMContentLoaded", function () {
	var toggle = document.querySelector(".nav-toggle");
	var dropdownMenu = document.querySelector(".dropdown-menu");

	toggle.addEventListener("click", function () {
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
		console.log(currentIndex);
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
		console.log(currentIndex);

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
