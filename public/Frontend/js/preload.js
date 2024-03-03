// preloader.js
document.addEventListener("DOMContentLoaded", function () {
  // Remove preloader when the content is fully loaded
  window.addEventListener("load", function () {
    var preloader = document.getElementById("preloader");
    preloader.style.display = "none";
  });
});
