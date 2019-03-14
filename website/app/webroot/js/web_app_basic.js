$(document).ready(function(){
	$(".slide-home").owlCarousel({
		loop:true,
		items: 1,
		autoplay: true,
	});

	$(".slide-product").owlCarousel({
		loop:true,
		items: 4,
		margin: 25,
		autoplay: true,
		dots: false,
		nav: true
	});

	$(".deal-slide").owlCarousel({
		loop:true,
		items: 1,
		//margin: 25,
		//autoplay: true,
		dots: false,
		nav: true
	});

	$(".extra-product").owlCarousel({
		loop:true,
		items: 3,
		//margin: 25,
		//autoplay: true,
		dots: false,
		nav: true,
		// nestedItemSelector: true
	});

	checkClasses();
	$(".extra-product").on('translated.owl.carousel', function(event) {
		checkClasses();
	});


	$(".slide-trend-product").owlCarousel({
		loop:true,
		items: 4,
		dots: false,
		nav: true,
	});
	trendClasses();
	$(".slide-trend-product").on('translated.owl.carousel', function(event) {
		checkClasses();
	});

	$("#sort-category").on('click', function(){
		if($(".item-categories:first").is( ":hidden" )){
			$(".item-categories").slideDown("slow");			
		} else{
			$(".item-categories").slideUp("slow");
		}
	});

	$("#myaccount").hover(function(){
		if($("#account:first").is( ":hidden" )){
			$("#account").slideDown("slow");
		} else{
			$("#account").hide("slow");
		}
	});

	$('.product-deal #count-down').countdown('2020/10/20').on('update.countdown', function(event) {
		var $this = $(this).html(event.strftime(''
			+ '<div> <span>%-w</span> <p> week%!w </p> </div>'
			+ '<div> <span>%-d</span> <p> day%!d </p> </div>'
			+ '<div> <span>%H</span> <p> hr </p> </div>'
			+ '<div> <span>%M</span> <p> min </p> </div>'
			+ '<div> <span>%S</span> <p> sec </p> </div>'));
		});

});

//Add class first item and last item
function checkClasses(){
	var total = $('.extra-product .owl-stage .owl-item.active').length;
	
	$('.extra-product .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');
	
	$('.extra-product .owl-stage .owl-item.active').each(function(index){
		if (index === 0) {
			// this is the first one
			$(this).addClass('firstActiveItem');
		}
		if (index === total - 1 && total>1) {
			// this is the last one
			$(this).addClass('lastActiveItem');
		}
	});
}

function trendClasses(){
	var total = $('.slide-trend-product .owl-stage .owl-item.active').length;
	
	$('.slide-trend-product .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');
	
	$('.slide-trend-product .owl-stage .owl-item.active').each(function(index){
		if (index === 0) {
			// this is the first one
			$(this).addClass('firstActiveItem');
		}
		if (index === total - 1 && total>1) {
			// this is the last one
			$(this).addClass('lastActiveItem');
		}
	});
}

