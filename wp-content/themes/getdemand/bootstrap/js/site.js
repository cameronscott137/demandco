//@codekit-prepend "jquery.localscroll-1.2.7-min.js"
//@codekit-prepend "jquery.scrollTo-1.4.3.1-min.js"
//@codekit-prepend "modal.js"
//@codekit-prepend "transition.js"


function isMobile() {
    return (
    (navigator.userAgent.match(/Android/i)) ||
    (navigator.userAgent.match(/webOS/i)) ||
    (navigator.userAgent.match(/iPhone/i)) ||
    (navigator.userAgent.match(/iPod/i)) ||
    (navigator.userAgent.match(/iPad/i)) ||
    (navigator.userAgent.match(/BlackBerry/))
    );
}


jQuery(document).ready(function($) {
    if(isMobile()) {
      jQuery('body').addClass('mobile');
    }

    $('.entry-meta').localScroll(
    {
      duration: 700,
      offset: -100
    });

    $('.social').localScroll(
    {
      duration: 700,
      offset: -100
    });

    $('.category-toggle').toggle(
        function() {
          $( '.categories' ).addClass( "selected" );
        }, function() {
          $( '.categories' ).removeClass( "selected" );
        }
    );
});


