"use strict";

var propertyTypeSelect = document.getElementById("p_type");

propertyTypeSelect.addEventListener("change", (event) => { toggleFloorLevel() });

function toggleFloorLevel() {
    console.log(1);
    var floorLevelDiv = document.getElementById("floor_level");
    var isFloorLevelRelated = propertyTypeSelect.options[propertyTypeSelect.selectedIndex].getAttribute("data-floor-level") === "true";
    if(isFloorLevelRelated){
        floorLevelDiv.classList.remove("hidden");
    }
}


let duration = document.getElementById("duration");
document
    .querySelectorAll(`input[name=offer]`)
    .forEach((radio) => {
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


