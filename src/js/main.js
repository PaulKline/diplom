/* $(document).ready(function(){
  $(function () {
    $('#nav_list').hover(function () {
      $('#nav_list').children('ul').stop(false, false).fadeIn(500);
      $('#submenu').css('display', 'flex', 'justify-content', 'space-around');
      $('#nav_list').addClass('#submenu a');
    }, function () {
      $(this).children('ul').stop(false, true).fadeOut(500);
      $('#nav_list').children('a').removeClass('#submenu a');
    });
  });  
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    onInitialized: updateTitles,
    onTranslated: updateTitles,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 1
      }
    }
  });
  function updateTitles() {
    const $curr = $('.owl-carousel').find('.owl-item.active');
    $('.prev').text($curr.prev('.owl-item').text());
    $('.next').text($curr.next('.owl-item').text());
  }
  dotcount = 0;

  jQuery('.owl-dot').each(function () {
    jQuery(this).addClass('dotnumber' + dotcount);
    jQuery(this).attr('data-info', dotcount);
    dotcount = dotcount + 1;
  });

  // 2) ASSIGN EACH 'SLIDE' A NUMBER
  slidecount = 1;

  jQuery('.owl-item').not('.cloned').each(function () {
    jQuery(this).addClass('slidenumber' + slidecount);
    slidecount = slidecount + 1;
  });

  // SYNC THE SLIDE NUMBER IMG TO ITS DOT COUNTERPART (E.G SLIDE 1 IMG TO DOT 1 BACKGROUND-IMAGE)
  jQuery('.owl-dot').each(function () {

    grab = jQuery(this).data('info');

    slidegrab = jQuery('.slidenumber' + grab + ' img').attr('src');
    console.log(slidegrab);

    jQuery(this).css("background-image", "url(" + slidegrab + ")");

  });

  // THIS FINAL BIT CAN BE REMOVED AND OVERRIDEN WITH YOUR OWN CSS OR FUNCTION, I JUST HAVE IT
  // TO MAKE IT ALL NEAT 
  amount = jQuery('.owl-dot').length;
  gotowidth = 15 / amount;
  jQuery('.owl-dot').css("width", gotowidth + "%");
  newwidth = jQuery('.owl-dot').width();
  jQuery('.owl-dot').css("height", newwidth + "px");
});
 */
$(document).ready(function () {
  $(function () {
    $('#nav_list').hover(function () {
      $('#nav_list').children('ul').stop(false, false).fadeIn(200);
      $('#submenu').css('display', 'flex', 'justify-content', 'flex-start');
      $('#nav_list').addClass('#submenu a');
    }, function () {
      $(this).children('ul').stop(false, true).fadeOut(200);
      $('#nav_list').children('a').removeClass('#submenu a');
    });
  });
});

$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  items: 1,
  onInitialized: updateTitles,
  onTranslated: updateTitles
});
jQuery(document).ready(function () {


  // 1) ASSIGN EACH 'DOT' A NUMBER
  dotcount = 1;

  jQuery('.owl-dot').each(function () {
    jQuery(this).addClass('dotnumber' + dotcount);
    jQuery(this).attr('data-info', dotcount);
    dotcount = dotcount + 1;
  });

  // 2) ASSIGN EACH 'SLIDE' A NUMBER
  slidecount = 1;

  jQuery('.owl-item').not('.cloned').each(function () {
    jQuery(this).addClass('slidenumber' + slidecount);
    slidecount = slidecount + 1;
  });

  // SYNC THE SLIDE NUMBER IMG TO ITS DOT COUNTERPART (E.G SLIDE 1 IMG TO DOT 1 BACKGROUND-IMAGE)
  jQuery('.owl-dot').each(function () {

    grab = jQuery(this).data('info');

    slidegrab = jQuery('.slidenumber' + grab + ' img').attr('src');
    console.log(slidegrab);

    jQuery(this).css("background-image", "url(" + slidegrab + ")");

  });

  // THIS FINAL BIT CAN BE REMOVED AND OVERRIDEN WITH YOUR OWN CSS OR FUNCTION, I JUST HAVE IT
  // TO MAKE IT ALL NEAT 
  amount = jQuery('.owl-dot').length;
  gotowidth = 30 / amount;

  jQuery('.owl-dot').css("width", gotowidth + "%");
  newwidth = jQuery('.owl-dot').width();
  jQuery('.owl-dot').css("height", newwidth + "px");



});

function updateTitles() {
  const $curr = $('.owl-carousel').find('.owl-item.active');
  $('.prev').text($curr.prev('.owl-item').text());
  $('.next').text($curr.next('.owl-item').text());
}
