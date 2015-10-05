/*jshint devel: true */

/*
=============================================================================
  FUNCTION DECLARATIONS
=============================================================================
*/

var carmel = (function($) {
  "use strict";

  /*
    Utility
    
    Various utility functions that load/unload/route data,
    call other functions, etc.
  */

  var utility = (function() {

    var init = function() { // Called on page load, calls all other functions that should occur on page load

      // On init function calls

      // User input calls
      $('.site-header__nav .handle, .site-header__nav .fill').click(function() {
        carmel.expandNavigation();
      });

    };

    var onScroll = function() { // Called when the browser window is scrolled
      // Functions
    };

    var resize = function() { // Called when the browser window is resized
      // Functions
    };

    // var onInterval = setInterval(function(){ // items to run on an interval.

    // }, 300);

    return  {
      init: init,
      onScroll: onScroll,
      resize: resize
    };
  })();

  var expandNavigation = function() {
    $('.site-header__logo').toggleClass('site-header__logo--nav-open');
    $('.site-header__nav').toggleClass('site-header__nav--open');
    $('.site-header__nav .handle').toggleClass('open');
    if (!$('.site-header__nav .fill').hasClass('visible')) {
      setTimeout(function() {
        $('.site-header__nav .fill').toggleClass('visible');
      }, 250);
    }
    else {
      $('.site-header__nav .fill').toggleClass('visible');
    }
  };

  // public
  return {
    utility: utility,
    expandNavigation: expandNavigation,
  };
})(jQuery); // var carmel = (function() {

$(document).ready(function() {
   carmel.utility.init();

   // $(window).resize(function(){ carmel.utility.resize(); });
   // $(window).scroll(function(){ carmel.utility.onScroll(); });
});
