$(function() {
  $('.cloud-left').hover(function() {
    $('h1').css('color', 'yellow');
  }, function() {
    $('h1').css('color', '');
  });
});
$(function() {
  $('.cloud-right').hover(function() {
    $('h1').text('or code all night ; )').css('font-size','60px').css('color', 'pink');
  }, function() {
    $('h1').text('Good Night!').css('font-size','6em').css('color', 'white');
  });
});