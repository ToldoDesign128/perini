// Mobile Menu
jQuery("#hamburgerBtn").click(function () {
  jQuery("#hamburgerBtn").toggleClass("hamburger-active");
  jQuery("#mobileMenu").toggleClass("panel-active");
});

// Desktop Menu Hover
jQuery(".main-navigation .menu-item-has-children .submenu-toggle").click(
  function () {
    jQuery(".sub-menu").toggleClass("submenu-open");
  }
);

// Mobile Menu Toggle
jQuery(document).ready(function($) {
  $("#mobileMenu .submenu-toggle").click(function(e) {
    e.preventDefault();
    var $menuItem = $(this).closest(".menu-item-has-children");
    $menuItem.toggleClass("submenu-open");
  });
});