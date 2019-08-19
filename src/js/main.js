
$(function(){
  $('#nav_list').hover(function () {
    $('#nav_list').children('ul').stop(false, true).fadeIn(333);
    $('#nav_list').addClass('#submenu');
  }, function () {
    $(this).children('ul').stop(false, true).fadeOut(333);
    $('#nav_list').children('a').removeClass('#submenu');
  });
});  
