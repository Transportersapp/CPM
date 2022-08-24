jQuery(document).ready(function(){
    var windowWidth = jQuery(window).outerWidth() - jQuery(window).width();
  jQuery('.modal-button').click(function(){
    jQuery('html, body').addClass('overflow-hidden');
    jQuery('body').css('padding-right', windowWidth + 'px');
    jQuery('.modal-popup').removeClass('modal-open');
    jQuery(jQuery(this).attr('href')).addClass('modal-open');
    return false;
  });

  jQuery('.close-modal-button').click(function(){
    jQuery('html, body').removeClass('overflow-hidden');
    jQuery('.modal-popup').removeClass('modal-open');
    jQuery('body').css('padding-right', '0px');
    return false;
  });

  jQuery('.toggle-button').click(function(){
    jQuery('body').toggleClass('show-icon');
  });

  var temp = 0;
  $(window).bind("load resize",function(e){
      if ($(window).width() < 767) {
        if(temp == 0) {
            jQuery('.search-filter-row li a').addClass('mobile');
        }
        temp = 1;
      }else {
        jQuery('.search-filter-row li a').removeClass('mobile');
        temp = 0;
      }
  });

  jQuery('body').on('click', '.search-filter-row li a.mobile', function(){
    jQuery(jQuery(this).attr('href')).slideToggle();
})

 

});