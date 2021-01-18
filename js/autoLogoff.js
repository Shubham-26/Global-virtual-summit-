 var validNavigation = false;

  window.onbeforeunload = function() {
      if (!validNavigation) {
         endSession();
      }
  }

  // Attach the event click for all links in the page
  $("a").bind("click", function() {
     validNavigation = true;
  });

  // Attach the event submit for all forms in the page
  $("form").bind("submit", function() {
     validNavigation = true;
  });