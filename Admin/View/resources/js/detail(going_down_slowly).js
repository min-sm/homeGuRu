"use strict";

let lineBreakSection = document.getElementById("line-break-section");
let lineBreakArrow = document.getElementById("line-break-arrow");
let unimportantDetails = document.querySelectorAll("#unimportant-details > *");
let unimportant_detail = document.getElementById("unimportant-details");

let isExpanded = false;

lineBreakSection.addEventListener("click", () => {
  isExpanded = !isExpanded;

  lineBreakArrow.classList.toggle("rotate-180");

  if (isExpanded) {
    let delay = 0;
    for (let i = unimportantDetails.length - 1; i >= 0; i--) {
      setTimeout(() => {
        unimportantDetails[i].style.transition = "opacity 0.5s ease";
        unimportantDetails[i].style.opacity = "0";
      }, delay);
      delay += 100;
    }
    unimportant_detail.classList.add("transition-opacity", "opacity-0");
    unimportant_detail.addEventListener(
      "transitionend",
      () => {
        unimportant_detail.classList.add("hidden");
        lineBreakSection.style.transform = "translateY(-100%)";
      },
      { once: true }
    );
  } else {
    unimportant_detail.classList.remove("hidden");
    setTimeout(() => {
      unimportant_detail.classList.remove("transition-opacity", "opacity-0");
    }, 50); // A slight delay for smoother transition appearance
    lineBreakSection.style.transform = "translateY(0)";
    for (let i = 0; i < unimportantDetails.length; i++) {
      setTimeout(() => {
        unimportantDetails[i].style.transition = "opacity 0.5s ease";
        unimportantDetails[i].style.opacity = "1";
      }, 100 * i);
    }
  }
});
