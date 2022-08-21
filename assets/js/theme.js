
function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  
        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}
  
function enableScroll() {
    window.onscroll = function() {};
}

jQuery(document).ready(function(){


  jQuery('.modal-button').click(function(){
    //jQuery('html, body').addClass('overflow-hidden');
    jQuery('.modal-popup').removeClass('modal-open');
    jQuery(jQuery(this).attr('href')).addClass('modal-open');
    disableScroll()
    return true;
  });

  jQuery('.close-modal-button').click(function(){
    //jQuery('html, body').removeClass('overflow-hidden');
    jQuery('.modal-popup').removeClass('modal-open');
    enableScroll()
  })

});