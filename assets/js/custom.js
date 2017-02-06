//MOBILE NAV HIDE SHOW
jQuery(function() {
  jQuery('.hidden').hide().click(function(e) {
    e.stopPropagation();
  });
  jQuery(".btnShow").click(function(e) {
    jQuery('.hidden').animate({ opacity: "toggle" });
  });
});