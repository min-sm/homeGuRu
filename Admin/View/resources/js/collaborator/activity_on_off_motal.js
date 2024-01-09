"use strict";

const acitivityItems = document.querySelectorAll(`a[name=activity_ban]`);
console.log(acitivityItems);
let confirmURL;
acitivityItems.forEach(item=>{
    item.addEventListener("click",function(){
        document.getElementById('activityModal').style.display = 'flex';
        console.log(document.getElementById('activityModal').id)

        
    })
});

function confirmActivity(){
    window.location.href = confirmURL;
}

function confirmation(activityURL){
    confirmURL = activityURL;
  console.log(confirmURL);
}

function hideModal(){
    document.getElementById('activityModal').style.display = 'none';
}
