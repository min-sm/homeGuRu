"use strict";

document.getElementById('pForm').addEventListener('submit', function(event) {
    if(document.getElementById('p_code').value =='' ||
    document.getElementById('offer').value ==''||
    document.getElementById('amount').value =='' ||
    document.getElementById('unit').value =='' ||
    document.getElementById('payer_name').value =='' ||
    document.getElementById('phone').value =='' ||
    document.getElementById('recipient_name').value =='' 
    ){
        event.preventDefault();
        console.log("a");
        alert("Refill All the Blank of From");
    
    }
   
   
});