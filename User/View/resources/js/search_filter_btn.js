"use strict";

const toggleFilterBtn = document.getElementById("toggleFilterBtn");
const filterElements = document.querySelectorAll('[id^="filter"]');

toggleFilterBtn.addEventListener("click", () => {
  filterElements.forEach((element) => {
    element.classList.toggle("hidden");
  });
});
