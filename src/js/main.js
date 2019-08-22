$(document).ready(function () {
	$(function () {
		$('#nav_list').hover(function () {
			$('#nav_list').children('ul').stop(false, false).fadeIn(200);
			$('#submenu').css('display', 'flex', 'justify-content', 'space-around');
			$('#nav_list').addClass('#submenu a');
		}, function () {
			$(this).children('ul').stop(false, true).fadeOut(200);
			$('#nav_list').children('a').removeClass('#submenu a');
		});
	});
	$('.sails-slider').slick({
		slideToShow: 1,
		arrows: false,
		slidesPerRow: 1,
		dots: true,
		dotsClass: 'top-dots',
		appendDots: $('.top-dots')
	});
	$('.feedback-slider').slick({
		arrows: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		draggable: false,
		centerMode: true,
		variableWidth: true,
		appendDots: $('.feedback-dots'),
		dotsClass: 'slick-dots slider__dots',
		customPaging: function (slick, index) {
			var image = $(slick.$slides[index]).find('.slider__img').attr('src');
			return '<img src="' + image + '" alt="" /> '
		}
	});
	$('.header__slider').slick({
		arrows: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		draggable: false,
		dots: true,
		dotsClass: 'slick-dots slider__dots',
		customPaging: function (slick, index) {
			var image = $(slick.$slides[index]).find('.slider__img').attr('src');
			return '<img src="' + image + '" alt="" />'
		}
	});
	$(".tab_item").not(":first").hide();
	$(".wrapper .tab").click(function () {
		$(".wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	$('.tab1').click(function () {
		$('.tabs-block1').css("display", "inline-block"),
			$('.tabs-block2').hide(),
			$('.tabs-block3').hide(),
			$('.tabs-block4').hide()
	});
	$('.tab2').click(function () {
		$('.tabs-block2').css("display", "inline-block"),
			$('.tabs-block1').hide(),
			$('.tabs-block3').hide(),
			$('.tabs-block4').hide()
	});
	$('.tab3').click(function () {
		$('.tabs-block3').css("display", "inline-block"),
			$('.tabs-block1').hide(),
			$('.tabs-block2').hide(),
			$('.tabs-block4').hide()
	});
	$('.tab4').click(function () {
		$('.tabs-block4').css("display", "inline-block"),
			$('.tabs-block1').hide(),
			$('.tabs-block2').hide(),
			$('.tabs-block3').hide()
	});
	$(".menu__showsub").click(function () {
		$(".menu__showsub2").toggle();
		$(".menu__showsub3").toggle();
		$(".menu__showsub4").toggle();
		$(".menu__showsub5").toggle();
		$(".menu__showsub6").toggle();
	});
	function updateTitles() {
		const $curr = $('.owl-carousel').find('.owl-item.active');
		$('.prev').text($curr.prev('.owl-item').text());
		$('.next').text($curr.next('.owl-item').text());
	}
});
$('.button').mouseover(function(){
	$(this).css("filter", 'opacity(90%');
});
$('.button').mouseout(function () {
	$(this).css("filter", 'opacity(100%');
});

$('.burger-btn').on('click', function(e){
	e.preventDefault;
	$(this).toggleClass('.burger-btn-active');
});
