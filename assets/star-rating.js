const ratingIcons = document.querySelectorAll(".collection-my-rating-icon");

ratingIcons.forEach(icon => {
	icon.addEventListener("click", function () {
		const rating = parseInt(this.getAttribute("data-rating"));
		setRating(rating);
	});
});

function setRating(rating) {
	ratingIcons.forEach(icon => {
		const iconRating = parseInt(icon.getAttribute("data-rating"));
		if (iconRating <= rating) {
			icon.classList.add("selected");
			icon.querySelector("img").src = "../assets/img/star-checked.svg";
		} else {
			icon.classList.remove("selected");
			icon.querySelector("img").src = "../assets/img/star.svg";
		}
	});
}
