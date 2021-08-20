$(function(){
  // js-toggle-btn
  var navbtn = '.js-toggle-btn';
  var navopen = 'nav-open';

  $(navbtn).on('click', function(){
    if($('html').hasClass(navopen)) {
      $('html').removeClass(navopen);
    } else {
      $('html').addClass(navopen);
    }
  });
  
});