"use strict";

var darkLayer = document.querySelector(".dark-layer");
var applyBtns = document.querySelectorAll(".apply-btn");
var closeAppliedForm = document.getElementById("closeAppliedForm");
var closeForm = document.getElementById("closeForm");
var applyFormScreen = document.getElementById("applyForm");
var appliedFormScreen = document.getElementById("appliedForm");
var closeAppliedFormButton = document.getElementById("closeAppliedFormButton");
applyBtns.forEach(function (button) {
  button.addEventListener("click", function () {
    darkLayer.classList.toggle("js--hidden");
  });
});
closeForm.addEventListener("click", function () {
  darkLayer.classList.toggle("js--hidden");
});
closeAppliedForm.addEventListener("click", function () {
  darkLayer.classList.toggle("js--hidden");
  applyFormScreen.classList.toggle("js--hidden");
  appliedFormScreen.classList.toggle("js--hidden");
});
closeAppliedFormButton.addEventListener("click", function () {
  darkLayer.classList.toggle("js--hidden");
  appliedFormScreen.classList.toggle("js--hidden");
  applyFormScreen.classList.toggle("js--hidden");
}); // // header-swiper
// var swiper = new Swiper('#main-swiper', {
//   fadeEffect: {
//     crossFade: true
//   },
//   navigation: {
//     nextEl: '.swiper-button-next--header',
//     prevEl: '.swiper-button-prev--header',
//   },
//   pagination: {
//     el: '.swiper-pagination',
//     type: 'bullets',
//     clickable: true,
//   },
//   loop: true,
//   // autoplay: {
//   //   delay: 2300,
//   // },
//   fadeEffect: {
//     crossFade: true
//   },
//   speed: 800,
//   watchSlidesProgress: true,
//   watchVisibility: true,
//   disableOnInteraction: true,
// });