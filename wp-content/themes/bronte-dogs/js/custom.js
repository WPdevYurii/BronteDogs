jQuery(function ($) {
  /*
   * Menu
   */
  $("body").on("click", ".menu-opener", function () {
    $("body").toggleClass("opened-menu opened opened-shim");
  });

  /*
   * Sub Menus
   */
  $("body").on("click", ".sub-opener", function () {
    $(this).next().stop().slideToggle();
  });

  /*
   * FAQ item
   */
  // $(".question").on("click", function () {
  //   if ($(this).parent().hasClass("active")) {
  //     $(this).parent().removeClass("active");
  //     $(this).next().stop().slideUp("fast");
  //   } else {
  //     $(this).parent().addClass("active");
  //     $(this).next().stop().slideDown("fast");
  //   }
  // });
});

document.addEventListener('DOMContentLoaded', function () {
  tns({
    container: '.slides',
    slideBy: 'page',
    autoplay: true,
    fixedWidth: 280, // Adjust to your needs
    controls: false,
    nav: false,
    mouseDrag: true,
    loop: true,
    swipeAngle: false,
    autoplayButtonOutput: false
  });
});

document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const sideMenu = document.querySelector('.side-menu');

    if (menuToggle && sideMenu) {
        menuToggle.addEventListener('click', () => {
            const isOpen = sideMenu.style.transform === 'translateX(0%)';
            sideMenu.style.transform = isOpen ? 'translateX(110%)' : 'translateX(0%)';
        });
    }
});
