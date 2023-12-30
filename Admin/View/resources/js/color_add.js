

// Getting input values of color
const headerInput = document.getElementById("header");
const footerInput = document.getElementById("footer");
const backgroundInput = document.getElementById("background");
const mainColorInput = document.getElementById("main_color");
const textColorInput = document.getElementById("text_color");

const headerLabel = document.getElementById("headerLabel");
const footerLabel = document.getElementById("footerLabel");
const backgroundLabel = document.getElementById("backgroundLabel");
const mainColorLabel = document.getElementById("mainColorLabel");
const textColorLabel = document.getElementById("textColorLabel");

// Getting input values of logos
const logoInput = document.getElementById("logoInput");
const faviconInput = document.getElementById("faviconInput");

const logoImg =document.getElementById('logoImg');
const faviconImg =document.getElementById('faviconImg');

// Getting input values of heros
const heroInput = document.getElementById("heroInput");
const collabInput = document.getElementById("collabInput");

const heroImg =document.getElementById('heroImg');
const collabImg =document.getElementById('collabImg');


//function of hadling color changes
function handleColorChange(inputElement, labelElement) {
    inputElement.addEventListener('input', function() {
        console.log(this.value);
        labelElement.style.background = this.value;
    });
}

//function of handling img changes
function handleImgChange(inputElement, imgElement) {
    inputElement.addEventListener('change', function() {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imgElement.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    });
}

handleColorChange(headerInput, headerLabel);
handleColorChange(footerInput, footerLabel);
handleColorChange(backgroundInput, backgroundLabel);
handleColorChange(mainColorInput, mainColorLabel);
handleColorChange(textColorInput, textColorLabel);
handleImgChange(logoInput,logoImg);
handleImgChange(faviconInput,faviconImg)
handleImgChange(heroInput,heroImg);
handleImgChange(collabInput,collabImg)