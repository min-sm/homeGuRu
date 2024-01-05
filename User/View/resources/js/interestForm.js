   $(document).ready(function(){
      $("#form").hide();
            // Button click event

            $("#interestRegister").click(function(){
                // Hide the interestRegister button and show the form
                $(this).hide();
                $("#info").hide();
                $("#form").show();
            });

            // Cancel button click event inside the form
            $("#cancel").click(function(){
                event.preventDefault();
                // Show the interestRegister button and hide the form
                $("#interestRegister").show();
                $("#info").show();
                $("#form").hide();
            });
        });