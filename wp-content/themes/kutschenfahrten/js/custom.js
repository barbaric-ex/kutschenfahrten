(function ($) {
  "use strict";

  $('a[href*="#"]:not([href="#"])').click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 56,
          },
          1000,
          "easeInOutExpo"
        );
        return false;
      }
    }
  });

  $(".js-scroll-trigger").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  $("body").scrollspy({
    target: "#mainNav",
    offset: 56,
  });

  $(window).on("load scroll", function (e) {
    if ($(".navbar").offset().top > 100) {
      $(".navbar").addClass("top-nav-collapse");
    } else {
      $(".navbar").removeClass("top-nav-collapse");
    }
  });

  jQuery(function ($) {
    if ($(window).width() < 991) {
      $(".navbar .dropdown > a").click(function () {
        location.href = this.href;
      });
    }
  });

  $(document).ready(function () {
    $(".menu-btn button").click(function () {
      $(".navbar-collapse").toggleClass("navbar250");
      $(".c-hamburger").toggleClass("is-active");
      $(".dark-overly").toggleClass("active");
    });
    $(".menu-btn-close").click(function () {
      $(".navbar-collapse").removeClass("navbar250");
      $(".menu-btn").removeClass("active");
      $(".dark-overly").removeClass("active");
    });
    $(".navbar-nav li a").click(function () {
      var windowWidth = $(window).width();
      if (windowWidth < 768) {
        $(".navbar-collapse").removeClass("navbar250");
        $(".c-hamburger").removeClass("is-active");
        $(".dark-overly").removeClass("active");
      }
    });
  });

  $(".navbar .dropdown > a").click(function () {
    location.href = this.href;
  });

  $(window).on("load", function (e) {
    $(" .accordion_wrap .title").click(function () {
      $(this).siblings(".text").slideToggle(300);
      $(this).toggleClass("active");
    });
  });

  $(window).on("load scroll", function (e) {
    if ($(window).scrollTop() > 500) {
      $(".to-top img").show(100);
    } else {
      $(".to-top img").hide(100);
    }
  });
  $(".to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800, "easeInOutExpo");
  });
  $(document).ready(function () {
    $(".animsition").animsition({
      inClass: "fade-in",
      outClass: "fade-out",
      inDuration: 800,
      outDuration: 800,

      linkElement: ".animsition-link a, .standard-btn a",
      linkElement:
        '.animsition-link a:not([target="_blank"]):not([href^="#"]):not([href^="?"]):not([class^="cc-btn"]):not([class^="dr-tab-category-morelink"]):not([class^="dr-privacylink"]):not([class^="remove"]):not([class^="tinvwl_add_to_wishlist_button"])',
      loading: true,
      loadingParentElement: "body",
      loadingClass: "animsition-loading",
      loadingInner: "",
      timeout: false,
      timeoutCountdown: 5000,
      onLoadEvent: true,
      browser: ["animation-duration", "-webkit-animation-duration"],
      overlay: false,
      overlayClass: "animsition-overlay-slide",
      overlayParentElement: "body",
      transition: function (url) {
        window.location.href = url;
      },
    });
  });
})(jQuery);
