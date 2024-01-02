"use strict";
const fileInput = document.getElementById("add_img");
const imageList = document.getElementById("imageList");

fileInput.addEventListener("change", (event) => {
  const files = event.target.files;

  // Check if the number of selected files is greater than 5
  if (files.length > 5) {
    alert("You can only select up to 5 files.");
    // Clear the file input
    fileInput.value = "";
    return;
  }
  // Clear previous images displayed
  imageList.innerHTML = "";

  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const fileName = file.name;
    // Check if the file is of type jpg/jpeg
    const imageContainer = document.createElement("div");
    const imageLabelContainer = document.createElement("div");
    imageLabelContainer.classList.add("image-label-container");
    imageContainer.classList.add("image-container");
    imageContainer.classList.add("property-img");

    // Set background image for the div
    imageContainer.style.backgroundImage = `url('${URL.createObjectURL(
      file
    )}')`;

    const fileLabel = document.createElement("p");
    fileLabel.textContent = fileName;

    // Display the div with background image and file name
    imageLabelContainer.appendChild(imageContainer);
    imageLabelContainer.appendChild(fileLabel);

    imageList.appendChild(imageLabelContainer);
  }
});
