"use strict";

let lineBreakSection = document.getElementById("line-break-section");
let lineBreakArrow = document.getElementById("line-break-arrow");
let unimportantDetails = document.querySelectorAll("#unimportant-details > *");

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
        if (i === 0) {
          lineBreakSection.style.transform = "translateY(-100%)";
        }
      }, delay);
      delay += 100;
    }
  } else {
    lineBreakSection.style.transform = "translateY(0)";
    for (let i = 0; i < unimportantDetails.length; i++) {
      setTimeout(() => {
        unimportantDetails[i].style.transition = "opacity 0.5s ease";
        unimportantDetails[i].style.opacity = "1";
      }, 100 * i);
    }
  }
});