const darkLayer = document.querySelector(".dark-layer");
const applyBtns = document.querySelectorAll(".apply-btn");
const closeAppliedForm = document.getElementById("closeAppliedForm");
const closeForm = document.getElementById("closeForm");
const applyFormScreen = document.getElementById("applyForm");
const appliedFormScreen = document.getElementById("appliedForm");
const closeAppliedFormButton = document.getElementById(
  "closeAppliedFormButton"
);

applyBtns.forEach((button) => {
  button.addEventListener("click", () => {
    darkLayer.classList.toggle("js--hidden");
  });
});

closeForm.addEventListener("click", () => {
  darkLayer.classList.toggle("js--hidden");
});
closeAppliedForm.addEventListener("click", () => {
  darkLayer.classList.toggle("js--hidden");
  applyFormScreen.classList.toggle("js--hidden");
  appliedFormScreen.classList.toggle("js--hidden");
});
closeAppliedFormButton.addEventListener("click", () => {
  darkLayer.classList.toggle("js--hidden");
  appliedFormScreen.classList.toggle("js--hidden");

  applyFormScreen.classList.toggle("js--hidden");
});
