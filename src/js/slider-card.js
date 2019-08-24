$(document).ready(function(){
  $('.card-slider').slick({
    infinity: true,
    aarrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: false,
    dots: true,
    prevArrow: $('.myPrev'),
    nextArrow: $('.myNext'),
    dotsClass: 'catalog-dots catalog-dots',
      customPaging: function (slick, index) {
        var image = $(slick.$slides[index]).find('.sliders__img').attr('src');
        return '<img src="' + image + '" alt="" />'
      }
  });
    var nCount = 0;
    $('.counter-number').html(nCount);
    $('.counter-plus').click(function () {
      nCount++;
      $('.counter-number').html(nCount);
    });
    $('.counter-minus').click(function () {
      if (nCount >= 1) {
        nCount--;
        $('.counter-number').html(nCount);
      };
    });
    $('.card-productstory__tabitem').not(':first').hide();
    $('.card-productstory .card-productstory__tab').click(function(){
      $('.card-productstory .card-productstory__tab').removeClass('activet').eq($(this).index()).addClass("activet");
      $('.card-productstory__tabitem').hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass('activet');
});