jQuery(document).ready(function($) {
   carmel.utility.init();

   // $(window).resize(function(){ carmel.utility.resize(); });
   // $(window).scroll(function(){ carmel.utility.onScroll(); });
});


/*
=============================================================================
  FUNCTION DECLARATIONS
=============================================================================
*/

var carmel = (function($) {

  /*
    Utility
    
    Various utility functions that load/unload/route data,
    call other functions, etc.
  */

  var utility = (function() {

    var init = function() { // Called on page load, calls all other functions that should occur on page load

      // On init function calls

      // User input calls

    };

    var onScroll = function() { // Called when the browser window is scrolled
      // Functions
    };

    var resize = function() { // Called when the browser window is resized
      // Functions
    };

    var onInterval = setInterval(function(){ // items to run on an interval.

    }, 300);

    return  {
      init: init,
      onScroll: onScroll,
      resize: resize
    }
  })();

  var example = function() {

  };

  // public
  return {
    utility: utility,
    example: example
  };
})(jQuery); // var carmel = (function() {