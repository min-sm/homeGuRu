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
  } else {
    floorLevelDiv.classList.add("hidden");
  }
}

let duration = document.getElementById("duration");
document.querySelectorAll('input[name="p_offer"]').forEach((radio) => {
  radio.addEventListener("change", (event) => {
    showRentInfo(event.target.id);

    console.log(event.target.id);
  });
});

function showRentInfo(id) {
  if (id == "rent") {
    duration.classList.remove("hidden");
  } else if (id == "sale") {
    duration.classList.add("hidden");
  }
}
