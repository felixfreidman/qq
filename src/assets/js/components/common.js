const darkLayer = document.querySelector(".dark-layer");
const applyBtns = document.querySelectorAll(".apply-btn");
const closeAppliedForm = document.getElementById("closeAppliedForm");
const closeForm = document.getElementById("closeForm");
const applyFormScreen = document.getElementById("applyForm");
const appliedFormScreen = document.getElementById("appliedForm");

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
});
