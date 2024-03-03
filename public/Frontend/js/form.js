"use strict"; // start of use strict

$(document).ready(function () {
  search_form_height();
  search_form_click();
  search_tours_form_resize();
});

$(window).resize(function () {
  search_form_height();
  search_tours_form_resize();
});
// search tours form
function search_form_height() {
  var contH = $(".search-tours-wrap .tours-container.active").outerHeight();
  $(".search-tours-content").css({ height: +contH + "px" });
}

function search_form_click() {
  $(".tours-tab-btn").each(function () {
    $(this).on("click", function () {
      $(this).siblings().removeClass("active");
      $(this).addClass("active");

      var idBtn = $(this).attr("data-tours-cat");
      var containerList = $(this)
        .parents(".search-tours-wrap")
        .find(".tours-container");
      var f = $(".search-tours-wrap [data-tours-cat=" + idBtn + "]");

      $(f)
        .addClass("active")
        .siblings(".tours-container")
        .removeClass("active");
      $(containerList).fadeOut(0);
      $(f).fadeIn(600);
      $(this)
        .addClass("active")
        .siblings(".tours-tab-btn")
        .removeClass("active");

      var contH = $(".search-tours-wrap .tours-container.active").outerHeight();
      $(".search-tours-content").css({ height: +contH + "px" });
    });
  });

  $(document).on("click", ".tours-calendar span", function () {
    $(this)
      .siblings(".calendar-widget")
      .toggleClass("active")
      .fadeToggle("fast");
    if (
      $(this)
        .parent()
        .siblings(".tours-calendar")
        .find(".calendar-widget")
        .hasClass("active")
    ) {
      $(this)
        .parent()
        .siblings(".tours-calendar")
        .find(".calendar-widget")
        .removeClass("active")
        .css("display", "none");
    }
  });
}

// search tours form resize function
function search_tours_form_resize() {
  if ($(window).width() <= 991) {
    $(".search-tours-form").addClass("mob-search-form");
    $(".search-tours-form .search-tours-wrap")
      .parent()
      .removeClass("container");
  } else {
    $(".search-tours-form").removeClass("mob-search-form");
    $(".search-tours-form .search-tours-wrap").parent().addClass("container");
  }
}
