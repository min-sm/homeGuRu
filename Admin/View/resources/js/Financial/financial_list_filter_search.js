

document.getElementById('financial_Form').addEventListener('submit', function(event) {
    if(document.getElementById('start_date').value =='' ||
    document.getElementById('end_date').value ==''    
    ){
        event.preventDefault();
        alert("Refill Date Correctly");
    
    }
});


$(document).ready(function() {
    // Function to show/hide divs based on radio button value
    function showHideDivs() {        
        // Hide all divs initially
        $("#rent, #sale, #collaborator").hide();

        // Show the corresponding div based on the selected radio button value
        var selectedValue = $("input[name='financial_type']:checked").val();
        
        if (selectedValue == 1) {
            $("#rent").show();
        } else if (selectedValue == 2) {
            $("#sale").show();
        } else {
            $("#collaborator").show();
        }
    }

    // Trigger the change event initially to set the initial state
    showHideDivs();

    // Bind the change event to the radio buttons
    $("input[name='financial_type']").change(showHideDivs);
});
