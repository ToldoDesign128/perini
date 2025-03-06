// Mobile Menu
jQuery("#hamburgerBtn").click(function () {
  jQuery("#hamburgerBtn").toggleClass("hamburger-active");
  jQuery("#mobileMenu").toggleClass("panel-active");
  jQuery("html").toggleClass("stop-scroll");
});

// Desktop Menu
jQuery(".main-navigation .menu-item-has-children .submenu-toggle").click(function () {
  var $submenu = jQuery(this).siblings(".sub-menu");
  var $openSubmenu = jQuery(".main-navigation .submenu-open").not($submenu);

  // Chiudi il pannello aperto
  $openSubmenu.removeClass("submenu-open");

  // Apri il nuovo pannello
  $submenu.toggleClass("submenu-open");
});

// Mobile Menu Toggle
jQuery(document).ready(function($) {
  $("#mobileMenu .submenu-toggle").click(function(e) {
    e.preventDefault();
    var $menuItem = $(this).closest(".menu-item-has-children");

    // Se il menuItem ha già la classe "submenu-open", rimuovila
    if ($menuItem.hasClass("submenu-open")) {
      $menuItem.removeClass("submenu-open");
    } else {
      // Rimuovi la classe "submenu-open" da tutti gli altri elementi
      $("#mobileMenu .menu-item-has-children").removeClass("submenu-open");
      // Aggiungi la classe "submenu-open" al menuItem cliccato
      $menuItem.addClass("submenu-open");
    }
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