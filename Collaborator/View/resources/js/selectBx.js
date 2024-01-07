"use strict";

var propertyTypeSelect = document.getElementById("p_type");

propertyTypeSelect.addEventListener("change", (event) => {
  toggleFloorLevel();
});

function toggleFloorLevel() {
  var floorLevelDiv = document.getElementById("floor_lvl_section_element");
  var isFloorLevelRelated =
    propertyTypeSelect.options[propertyTypeSelect.selectedIndex].getAttribute(
      "data-floor-level"
    ) === "true";
  if (isFloorLevelRelated) {
    floorLevelDiv.classList.remove("hidden");
    floorLevelDiv.classList.add("flex");
    floorLevelDiv.querySelector("select").required = true;
  } else {
    floorLevelDiv.classList.add("hidden");
    floorLevelDiv.classList.remove("flex");
    floorLevelDiv.querySelector("select").required = false;
  }
}

let duration = document.getElementById("duration");
document.querySelectorAll('input[name="p_offer"]').forEach((radio) => {
  radio.addEventListener("change", (event) => {
    showRentInfo(event.target.id);

    console.log(event.target.id);
  });
});
let durationInputs = duration.querySelectorAll("input");
function showRentInfo(id) {
  if (id == "rent") {
    duration.classList.remove("hidden");
    duration.classList.add("flex");
    durationInputs.forEach((element) => {
      element.required = true;
    });
  } else if (id == "sale") {
    duration.classList.add("hidden");
    duration.classList.remove("flex");
    durationInputs.forEach((element) => {
      element.required = false;
    });
  }
}

// JS Code to prevent negative numbers
let numberInputs = document.querySelectorAll('input[type="number"]');

numberInputs.forEach((input) => {
  input.addEventListener("input", function () {
    if (this.value < 0) {
      this.value = 0;
    }
  });
});