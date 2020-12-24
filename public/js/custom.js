
         $('#app-showcase').owlCarousel({
             loop: true,
             margin: 30,
             smartSpeed: 2000, // duration of change of 1 slide
             nav: true,
             navigation: true,
             responsiveClass: true,
             responsive: {
                 0: {
                     items: 1,
                     nav: true
                 },
                 600: {
                     items: 2,
                     nav: false
                 },
                 1000: {
                     items: 3,
                     nav: true
                 },
                 1400: {
                     items: 3,
                     nav: true 
                 }
             }
         })
         $('#testimonial').owlCarousel({
             loop: true,
             margin: 30,
             smartSpeed: 2000, // duration of change of 1 slide
             nav: true,
             navigation: true,
             responsiveClass: true,
             responsive: {
                 0: {
                     items: 1,
                     nav: true
                 },
                 600: {
                     items: 1,
                     nav: false
                 },
                 1000: {
                     items: 1,
                     nav: true
                 },
                 1400: {
                     items: 1,
                     nav: true 
                 }
             }
         })
         document.getElementById('vid,vid1,vid2,vid3,vid4,vid5,vid6').play();
		 
		 $(".navbar-toggler-icon").click(function(event) {
		event.preventDefault();
		$(".nav-menu").addClass('active');
	});
	$(".close-menu").click(function() {
		$(".nav-menu").removeClass('active');
	});