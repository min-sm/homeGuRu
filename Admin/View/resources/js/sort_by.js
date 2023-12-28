"use strict";

function handleRadioChange(radioGroupName, labelClass) {
  document
    .querySelectorAll(`input[name="${radioGroupName}"]`)
    .forEach((radio) => {
      radio.addEventListener("change", (event) => {
        const labels = document.querySelectorAll(`.${labelClass}`);
        console.log(labels);
        labels.forEach((label) => {
          label.classList.remove("text-goldYellow");
          label.classList.add("text-gray-500");
          console.log('this is worked.');
        });

        if (event.target.checked) {
          const selectedLabel = document.querySelector(
            `[for="${event.target.id}"]`
          );
          selectedLabel.classList.remove("text-gray-500");
          selectedLabel.classList.add("text-goldYellow");
        }
        console.log(event.target.id);
        card_table_view_change(event.target.id);
      });
    });
}
let table = document.getElementById("table");
let cards = document.getElementById("cards");
function card_table_view_change(id) {
  if (id === "card-view") {
    table.classList.add("hidden");
    cards.classList.remove("hidden");
  } else if (id === "table-view") {
    cards.classList.add("hidden");
    table.classList.remove("hidden");
  }
}

handleRadioChange("sort_by", "label");
handleRadioChange("view_option", "label1");