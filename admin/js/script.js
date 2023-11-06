$(document).ready(function() {
    $("#open-btn").click(function() {
      $("#popup-container").fadeIn();
    });
  
    $(".close-icon, #close-btn").click(function() {
      $("#popup-container").fadeOut();
    });
  });