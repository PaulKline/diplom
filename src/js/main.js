$(document).ready(function () {
	var callorder = document.querySelector('#callorder-anchor');
	var modalOne = document.querySelector('#modal-one');
	var closeOne = document.querySelector('#close__one');
	var invite = document.querySelector('#invite-anchor');
	var modalTwo = document.querySelector('#modal-two');
	var closeTwo = document.querySelector('#close__two');
	/* валидация формы секции brif */
	$('.brif__form').validate({
		errorClass: "invalid",
		errorElement: "div",
		rules: {
			username: {
				required: true,
				minlength: 2,
				maxlength: 16
			},
			phone: {
				required: true
			}
		},
		messages: {
			username: {
				required: 'обязательно укажите ваше имя',
				minlength: jQuery.validator.format('Осталось: {0}'),
				maxlength: 'максимальное число символов - 16'
			},
			phone: 'укажите номер вашего телефона'
		},
		submitHandler: function (form) {
			$.ajax({
				url: 'mail.php',
				type: 'POST',
				data: $('.brif__form').serialize(),
				success: function (data) {
					$('.brif__form')[0].reset();
					$('.popup').css('display', 'flex');
					$('#popup__closer').on('click', function (){
						$('.popup').css('display', 'none');
					});
				}
			});
		}
	});
	/* валидация формы модального окна "заказать звонок"  */
	$('.modal-callorder-form').validate({
		errorElement: "div",
		errorClass: "invalid",
		rules: {
			username: {
				required: true,
				minlength: 2,
				maxlength: 16
			},
			phone: {
				required: true
			}
		},
		messages: {
			username: {
				required: 'обязательно укажите ваше имя',
				minlength: jQuery.validator.format('Осталось: {0}'),
				maxlength: 'максимальное число символов - 16'
			},
			phone: 'укажите номер вашего телефона'
		},
		submitHandler: function (form) {
			$.ajax({
				url: 'mail.php',
				type: 'POST',
				data: $('.modal-callorder-form').serialize(),
				success: function (data) {
					$('.modal-callorder-form')[0].reset();
					$('.popup').css('display', 'flex');
					$('#popup__closer').on('click', function (){
					$('.popup').css('display', 'none');
					});
				}
			});
		}
	});
	/* настрока формы модального окна "вызывать замерщика" */
		$('.modal-invite-form').validate({
			errorElement: "div",
			errorClass: "invalid",
			rules: {
				username: {
					required: true,
					minlength: 2,
					maxlength: 16
				},
				phone: {
					required: true
				}
			},
			messages: {
				username: {
					required: 'обязательно укажите ваше имя',
					minlength: jQuery.validator.format('Осталось: {0}'),
					maxlength: 'максимальное число символов - 16'
				},
				phone: 'укажите номер вашего телефона'
			},
			submitHandler: function (form) {
				$.ajax({
					url: 'mail.php',
					type: 'POST',
					data: $('.modal-invite-form').serialize(),
					success: function (data) {
						$('.modal-invite-form')[0].reset();
						$('.popup').css('display', 'flex');
						$('#popup__closer').on('click', function (){
							$('.popup').css('display', 'none');
					});
					}
				});
			}
		});
	/* подключение масок */
	$('.phones').mask('+7(999)999-99-99');
	/* вызов модальных окон */
	callorder.addEventListener('click', function (){
		modalOne.classList.add('modal-one__active');
	});
	closeOne.addEventListener('click', function () {
		modalOne.classList.remove('modal-one__active');
	});
	invite.addEventListener('click', function () {
		modalTwo.classList.add('modal-two__active');
	});
	closeTwo.addEventListener('click', function () {
		modalTwo.classList.remove('modal-two__active');
	});
	/* всплывающее меню */
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
/* настроиваем hover эффекты */
$('.button').mouseover(function(){
	if ($(window).width() >= '992') {
		$(this).css("filter", 'opacity(90%');
	};
});
$('.button').mouseout(function () {
	if ($(window).width() >= '992') {
		$(this).css("filter", 'opacity(100%');
	};
});

$('.burger-btn').on('click', function(e){
	e.preventDefault;
	$(this).toggleClass('.burger-btn-active');
});
