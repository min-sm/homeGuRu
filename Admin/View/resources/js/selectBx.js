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
    // floorLevelDiv.setAttribute("required");
    floorLevelDiv.querySelector("select").required = true;
  } else {
    floorLevelDiv.classList.add("hidden");
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
    durationInputs.forEach((element) => {
      element.required = true;
    });
  } else if (id == "sale") {
    duration.classList.add("hidden");
    durationInputs.forEach((element) => {
      element.required = false;
    });
  }
}
