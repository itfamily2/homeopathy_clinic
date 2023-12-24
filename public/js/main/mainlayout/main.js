/* =================================
------------------------------------
	ProDent - Dentist Template
	Version: 1.0
 ------------------------------------ 
 ====================================*/


'use strict';

var multipleCardCarousel = document.querySelector(
	"#services-carousel"
);

if (window.matchMedia("(min-width: 768px)").matches) {
	var carousel = new bootstrap.Carousel(multipleCardCarousel, {
		interval: false,
	});

	var carouselWidth = $(".carousel-inner")[0].scrollWidth;
	var cardWidth = $(".carousel-item").width();
	var scrollPosition = 0;

	$("#services-carousel .carousel-control-next").on("click", function () {
		if (scrollPosition < carouselWidth - cardWidth * 4) {
		scrollPosition += cardWidth;
		$("#services-carousel .carousel-inner").animate(
			{ scrollLeft: scrollPosition },
			600
		);
		}
	});

	$("#services-carousel .carousel-control-prev").on("click", function () {
		if (scrollPosition > 0) {
		scrollPosition -= cardWidth;
		$("#carouselExampleControls .carousel-inner").animate(
			{ scrollLeft: scrollPosition },
			600
		);
		}
	});

} else {
	$(multipleCardCarousel).addClass("slide");
}

$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut(); 
	$("#preloder").delay(0).fadeOut("fast").remove;
	//$("#preloder").delay(1).fadeOut("slow");

});
 
 
