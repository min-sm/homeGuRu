"use strict";
console.log("a");
document.getElementById('cForm').addEventListener('submit', function(event) {
    if(document.getElementById('gc_email').value =='' ||
    document.getElementById('gc_password').value ==''
   
    ){
        event.preventDefault();
        console.log("b");
        alert("Refill All the Blank From Data");
    
    }
   
   
});