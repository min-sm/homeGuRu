// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
const slider =document.getElementById('slider');
let imgs = document.getElementsByClassName("property-img");
let smalls=document.getElementsByClassName("property-imgs");
let fullImg = document.getElementById("display-full-img");
console.log
for (const small of smalls) {
  small.addEventListener("click", () => {
    // Input string
    const inputString = img.style.backgroundImage;
    console.log(inputString)
slider.style.backgroundImage=inputString;
  });
}
// When the user clicks the button, open the modal
for (const img of imgs) {
  img.addEventListener("click", () => {
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
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};