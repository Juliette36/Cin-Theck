function fixDiv() {
    var $cache = $('#logonavbar'); 
    if ($(window).scrollTop() > 100) 
      $cache.css({'position': 'fixed', 'top': '10px'}); 
    else
      $cache.css({'position': 'relative', 'top': 'auto'});
  }
  $(window).scroll(fixDiv);
  fixDiv();