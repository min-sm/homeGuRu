"use strict";
console.log('hello world')
const toggleFilterBtn = document.getElementById("toggleFilterBtn");
const filterElements = document.querySelectorAll('.filter');
console.log(filterElements)
toggleFilterBtn.addEventListener("click", () => {
  filterElements.forEach((element) => {
    element.classList.toggle("hidden");
    console.log('ok')
  });
});
