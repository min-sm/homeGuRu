"use strict";

let rent = document.getElementById("rent");
let sale = document.getElementById("sale");
let collaborator =document.getElementById("collaborator");


document
.querySelectorAll(`input[name=financial_type]`)
.forEach((radio) => {
  radio.addEventListener("change", (event) => {
    showTag(event.target.id);
    
    console.log(event.target.id);
  });
});

function showTag(id){
    if(id == "rent-radio"){
        rent.classList.remove("hidden");
        sale.classList.add("hidden");
        collaborator.classList.add("hidden");
    }else if(id == "sale-radio"){
        rent.classList.add("hidden");
        sale.classList.remove("hidden");
        collaborator.classList.add("hidden");
    }else if(id == "collaborator-radio"){
        rent.classList.add("hidden");
        sale.classList.add("hidden");
        collaborator.classList.remove("hidden");
    }
    

}


