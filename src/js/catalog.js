$(document).ready(function () {
  $('.cotalog-card__item').mouseover(function(){
    $(this).css({
      'height': '550px', 
      'z-index': '9999', 
      'transition': '0.3s',
      'box-shadow': '0 1 px 51 px 11 px rgba(127, 128, 139, 0.22)'
    });
  });
  $('.cotalog-card__item').mouseout(function () {
    $(this).css({
          'height': '390px',
          'z-index': '1',
          'box-shadow': 'none'
    });
  });
  var cCount = 0;
  $('.cotalog-number').html(cCount);
  $('.cotalog-plus').click(function () {
    cCount++;
    $('.cotalog-number').html(cCount);
  });
  $('.cotalog-minus').click(function () {
    if (cCount >= 1) {
      cCount--;
      $('.cotalog-number').html(cCount);
    };
  });

  $('.cotalog-wrapper__tagitems').not(':first').hide();
  $('.cotalog-wrapper .cotalog-wrapper__tag').click(function () {
    $('.cotalog-wrapper .cotalog-wrapper__tag').removeClass('activety').eq($(this).index()).addClass("activety");
    $('.cotalog-wrapper__tagitems').hide().eq($(this).index()).fadeIn()
  }).eq(0).addClass('activety');
});