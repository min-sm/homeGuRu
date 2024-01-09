$(document).ready(function(){
    $("#form").hide();

    // Button click event
    $("#interestRegister").click(function(){
        // Hide the interestRegister button and show the form with fadeIn animation (200ms duration)
        $(this).fadeOut(200);
        $("#info").fadeOut(200);
        $("#form").delay(200).fadeIn(400); // Add a 200ms delay and set fadeIn duration to 400ms
    });


    // Cancel button click event inside the form
    $("#cancel").click(function(event){
        event.preventDefault();
        // Show the interestRegister button and hide the form with fadeOut animation (200ms duration)
        $("#interestRegister").delay(200).fadeIn(400); // Add a 200ms delay and set fadeIn duration to 400ms
        $("#info").delay(200).fadeIn(400); // Add a 200ms delay and set fadeIn duration to 400ms
        $("#form").fadeOut(200);
    });

    // email input check
    function isValidEmail(email) {
        // Regular expression for a basic email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
      }
    
      $("#ilfForm").submit(function(event) {
        var userEmail = $("#email").val();
    
        if (!isValidEmail(userEmail)) {
          alert("Email is not valid. Please enter a valid email address.");
          event.preventDefault(); // Prevent the form from submitting
        }
        // Continue with form submission if email is valid
      });
});
