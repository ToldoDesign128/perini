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

// Faq
jQuery(document).ready(function($) {
  $('.faq-item .domanda').on('click', function() {
      var $faqItem = $(this).closest('.faq-item');
      if ($faqItem.hasClass('faq-active')) {
          // Se l'elemento ha già la classe .faq-active, rimuovila
          $faqItem.removeClass('faq-active');
      } else {
          // Altrimenti, rimuovi la classe .faq-active da tutti gli elementi .faq-item
          $('.faq-item').removeClass('faq-active');
          // Aggiungi la classe .faq-active solo all'elemento cliccato
          $faqItem.addClass('faq-active');
      }
  });
});
