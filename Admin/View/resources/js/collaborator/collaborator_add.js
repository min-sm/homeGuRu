"use strict";
    
"use strict";
    
document.getElementById('aForm').addEventListener('submit', function(event) {
    if(document.getElementById('imageInput').value =='' ||
    document.getElementById('gc_company_name').value ==''||
    document.getElementById('gc_company_id').value =='' ||
    document.getElementById('gc_email').value =='' ||
    document.getElementById('gc_password').value =='' ||
    document.getElementById('gc_owner_name').value =='' ||
    document.getElementById('gc_nrc').value =='' ||
    document.getElementById('gc_phone').value =='' ||
    document.getElementById('gc_address').value =='' 
    ){
        event.preventDefault();
        console.log("a");
        alert("Refill All the Blank From Data");
    
    }
});







