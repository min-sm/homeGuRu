
    
document.getElementById('cForm').addEventListener('submit', function(event) {
    if(document.getElementById('collaboratorSelect').value =='' ||
    document.getElementById('durationSelect').value ==''||
    document.getElementById('packageSelect').value =='' ||
    document.getElementById('amount').value =='' ||
    document.getElementById('unit').value =='' ||
    document.getElementById('payer_name').value =='' ||
    document.getElementById('phone').value =='' ||
    document.getElementById('recipient_name').value =='' 
    ){
        event.preventDefault();
        console.log("a");
        alert("Refill All the Blank From Data");
    
    }
});






