$(document).ready(function () {
  $("[data-fancybox]").fancybox({
    protect: true,
    buttons: ["zoom", "thumbs", "close"],
  });

  // Scroll - page

  // $(window).scroll(function () {
  //   // console.log($(window).scrollTop())
  //   if ($(window).scrollTop() === 0) {
  //     $('li a.nav-link').removeClass('active');
  //     $(this).addClass('active');
  //   } else if($(window).scrollTop() === 626) {
  //     $('li a.nav-link').removeClass('active');
  //     $(this).addClass('active');
  //   }
  // })

  $(".scroll-page").on("click", function (e) {
    e.preventDefault();
    var href = $(this).attr("href");
    var elementHref = $(href);
    $("body,html").animate({
        scrollTop: elementHref.offset().top - 55,
      },
      800,
      "swing"
    );
  });

  // $('.navbar-collapse ul li a.nav-link').on('click', function () {
  //   $('li a.nav-link').removeClass('active');
  //   $(this).addClass('active');
  // });

  // flashdata - Sweet Alert
  const flash_data = $(".flashdata").data("flashdata");
  if (flash_data == "success-send") {
    Swal.fire("Berhasil", "Pesan berhasil terkirim", "success");
  } else if (flash_data == "failed-send") {
    Swal.fire("Gagal", "Pesan gagal terkirim", "error");
  } else if (flash_data == "success-logout") {
    Swal.fire("Success", "You were success logout", "success");
  }
});