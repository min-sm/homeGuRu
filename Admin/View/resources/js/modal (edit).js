document.addEventListener("click", function (event) {
  // 'event.target' will give you the element that was clicked
  console.log("Clicked element:", event.target);
});

// Get the modal
var modal = document.getElementById("myModal");

const fileInput1 = document.getElementById("add_img");

fileInput1.addEventListener("change", function (event) {
  let imgs = document.getElementsByClassName("property-img");
  console.log(imgs);
  console.log(imgs[0]);

  let fullImg = document.getElementById("display-full-img");
  // When the user clicks the button, open the modal
  for (const img of imgs) {
    img.addEventListener("click", () => {
      console.log(img);
      let caption = img.nextElementSibling;
      // Input string
      const inputString = img.style.backgroundImage;

      // Regular expression pattern to extract the URL
      const regex = /url\("([^"]+)"\)/; // Matches the URL within url("...")

      // Use regex to extract the URL
      const match = inputString.match(regex);

      // Extracted URL
      const extractedURL = match ? match[1] : null; // Get the first capturing group

      console.log(extractedURL);
      const filename = caption.innerText
        .split("/")
        .pop()
        .replace(/\.[^/.]+$/, "");

      // Extracted text from URL
      const extractedText = filename.replace(/[-_]/g, " ");
      modal.style.display = "flex";
      fullImg.src = extractedURL;
      document.getElementById("img-description").innerText =
        extractedText.replace(/\b\w/g, (char) => char.toUpperCase());
    });
  }
});

// Get the button that opens the modal
let imgs = document.getElementsByClassName("property-img");
console.log(imgs);
console.log(imgs[0]);

let fullImg = document.getElementById("display-full-img");
// When the user clicks the button, open the modal
for (const img of imgs) {
  img.addEventListener("click", () => {
    console.log("enter");
    // Input string
    const inputString = img.style.backgroundImage;

    // Regular expression pattern to extract the URL
    const regex = /url\("([^"]+)"\)/; // Matches the URL within url("...")

    // Use regex to extract the URL
    const match = inputString.match(regex);

    // Extracted URL
    const extractedURL = match ? match[1] : null; // Get the first capturing group

    console.log(extractedURL);
    const filename = extractedURL
      .split("/")
      .pop()
      .replace(/\.[^/.]+$/, "");

    // Extracted text from URL
    const extractedText = filename.replace(/[-_]/g, " ");
    modal.style.display = "flex";
    fullImg.src = extractedURL;
    document.getElementById("img-description").innerText =
      extractedText.replace(/\b\w/g, (char) => char.toUpperCase());
  });

  const backgroundImage = img.style.backgroundImage;

  // Extract the file name
  const fileName = backgroundImage.match(/[^\/]+\.jpg/g);

  // Create a new <p> element
  const pTag = document.createElement("p");

  // Set the text content of the <p> element to the file name
  pTag.textContent = fileName[0];

  // Insert the <p> element after the current image container
  img.parentNode.insertBefore(pTag, img.nextSibling);
}

let delConfirmBx = document.getElementById("delConfirmBx");

function deleteBxShow() {
  console.log("deleteBxShow Fn");
  delConfirmBx.classList.remove("hidden");
  delConfirmBx.classList.add("flex");
}

function noBtnClick() {
  delConfirmBx.classList.remove("flex");
  delConfirmBx.classList.add("hidden");
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  } else if (event.target == delConfirmBx) {
    noBtnClick();
  }
};
