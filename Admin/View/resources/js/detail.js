"use strict";
const elementsToHide = document.querySelectorAll(".unimportant-detail");
const arrowIcon = document.getElementById("line-break-arrow");
let blkEle = document.getElementsByClassName("block-unimportant");

function toggleVisibility() {
  for (let i = elementsToHide.length - 1; i >= 0; i--) {
    const element = elementsToHide[i];
    if (element.style.display !== "none") {
      element.style.display = "none";
    } else {
      element.style.display = "flex";
      for (let j = 0; j < blkEle.length; j++) {
        blkEle[j].style.display = "block";
      }
    }
  }
  // Rotate the arrow icon
  arrowIcon.classList.toggle("rotate-180");
}

// Add click event listener to the line-break-section
document
  .getElementById("line-break-section")
  .addEventListener("click", toggleVisibility);
